@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <form action="{{ route('admin.post.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del post">
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Autore</label>
                    <input type="text" class="form-control" id="author"  name="author" placeholder="Inserisci il nome dell'autore">
                </div>
                <div class="mb-3">
                    <label for="image_url" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="image_url"  name="image_url" placeholder="Immagine post">
                </div>
                <div class="mb-3">
                    <label for="post_content" class="form-label">Testo</label>
                    <textarea class="form-control" id="post_content"  name="post_content" rows="4" placeholder="Inserisci testo"></textarea>
                </div>
                <div class="mb-3">
                    <button type="reset" class="btn btn-danger">Reset post</button>
                    <button type="submit" class="btn btn-secondary mx-2">Crea post</button>
                </div>           
            </form>
        </div>
        <div class="col-12 text-center my-3">
            <a class="btn btn-secondary p-2" href="{{route('admin.post.index')}}">Ritorna nei posts</a>
        </div>
    </div>
</div>
@endsection 