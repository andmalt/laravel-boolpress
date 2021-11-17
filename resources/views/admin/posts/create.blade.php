@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="col-12 col-md-10 col-lg-8">
            <form action="{{ route('admin.post.store') }}" method="post">
                @csrf

                <label for="category_id"></label>
                <select class="form-select my-3" name="category_id" id="category_id" aria-label="Default select example">
                    <option  >Open this select menu</option>
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

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del post" value="{{old('title', $newPost->title )}}">
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Autore</label>
                    <input type="text" class="form-control" id="author"  name="author" placeholder="Inserisci il nome dell'autore" value="{{old('author',$newPost->author)}}">
                </div>
                <div class="mb-3">
                    <label for="image_url" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="image_url"  name="image_url" placeholder="Immagine post" value="{{old('image_url',$newPost->image_url)}}">
                </div>
                <div class="mb-3">
                    <label for="post_content" class="form-label">Testo</label>
                    <textarea class="form-control" id="post_content"  name="post_content" rows="4" placeholder="Inserisci testo">{{old('post_content',$newPost->post_content)}}</textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-secondary ">Crea post</button>
                </div>           
            </form>
        </div>
        <div class="col-12 text-center my-3">
            <a class="btn btn-secondary p-2" href="{{route('admin.post.index')}}">Ritorna nei posts</a>
        </div>
    </div>
</div>
@endsection 