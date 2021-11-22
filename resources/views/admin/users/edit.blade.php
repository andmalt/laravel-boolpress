@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <h3>Modifica Post</h3>
            <form action="{{ route('admin.post.update', $post->id ) }}" method="post">
                @csrf
                @method('PATCH')

                <label for="category_id">Categoria</label>
                <select class="form-select my-3" name="category_id" id="category_id" aria-label="Default select example">
                    <option value="" >Open this select menu</option>
                    @foreach ($categories as $category)
                    <option 
                    @if (old('category_id') == $category->id){
                        selected
                    }
                    @endif 
                        value="{{$category->id}}">{{$category->name}}
                    </option>
                    @endforeach
                </select>

                


                <div class="form-check form-check-inline mx-3">
                    @foreach ($tags as $tag)               
                        <input type="checkbox" value="{{$tag->id}}" class="btn-check mx-2" id="tag-{{$tag->id}}" name="tags[]" 
                        @if (in_array($tag->id,old('tags',$tagIds ? $tagIds : [] ))) checked @endif >
                        <label class="form-check-label" for="tag-{{$tag->id}}">{{$tag->name}}</label>
                    @endforeach
                </div>

                
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del post" value="{{$post->title}}">
                </div>

                <div class="mb-3">
                    <label for="image_url" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="image_url"  name="image_url" placeholder="Immagine post" value="{{$post->image_url}}">
                </div>
                <div class="mb-3">
                    <label for="post_content" class="form-label">Testo</label>
                    <textarea class="form-control" id="post_content"  name="post_content" rows="4" placeholder="Inserisci testo">{{$post->post_content}}</textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-secondary mx-2">Aggiorna post</button>
                </div>           
            </form>
        </div>
        <div class="col-12 text-center my-3">
            <a class="btn btn-secondary p-2" href="{{route('admin.post.index')}}">Ritorna nei posts</a>
        </div>
    </div>
</div>
@endsection 