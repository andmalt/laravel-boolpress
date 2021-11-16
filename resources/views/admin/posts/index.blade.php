@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Post Date</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td><a href="{{ route('admin.post.show', $post->id ) }}">{{$post->title}}</a></td>
                        <td>{{$post->author}}</td>
                        <td>{{$post->post_date}}</td>
                    </tr>
                    @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection