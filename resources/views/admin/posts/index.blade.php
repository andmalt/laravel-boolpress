@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 text-center p-4">
        <a class="btn btn-secondary" href="{{ route('admin.post.create') }}">Inserisci nuovo post</a>
      </div>
      <div class="col-12 col-md-10 col-lg-8">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Post Date</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>

              @foreach ($posts as $post)
              <tr>
                  <th scope="row">{{$post->id}}</th>
                  <td><a href="{{ route('admin.post.show', $post->id ) }}">{{$post->title}}</a></td>
                  <td>{{$post->author}}</td>
                  <td>{{$post->getFormattedDate('post_date')}}</td>
                  <td><a class="btn btn-warning px-1" href="">Modifica post</a></td>

                  <td><a class="btn btn-danger px-1" href="">Cancella post</a></td>
              </tr>
              @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection