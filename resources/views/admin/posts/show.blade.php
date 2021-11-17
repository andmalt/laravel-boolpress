@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="card mb-3">
                <img src="{{$post->image_url}}" class="card-img-top" alt="{{$post->name}} image">
                <div class="card-body">
                  <h4 class="card-title">{{$post->title}}</h4>
                  <h5 class="card-title">by {{$post->author}}</h5> 
                  @if ($post->category_id == null)
                        <p class="card-text">Non ha categorie</p>
                  @else
                    <p class="card-text">{{$post->category_id}}</p> 
                  @endif                                   
                  <p class="card-text"><small class="text-muted">{{$post->getFormattedDate('post_date')}}</small></p>
                  <p class="card-text">{{$post->post_content}}</p>
                  
                </div>
            </div>
        </div>
        <div class="col-12 text-center my-2">
            <a class="btn btn-secondary p-2" href="{{route('admin.post.index')}}">Ritorna nei posts</a>
        </div>
    </div>
</div>
@endsection