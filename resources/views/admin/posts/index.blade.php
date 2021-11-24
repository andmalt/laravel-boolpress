@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 text-center p-4">
        <a class="btn btn-secondary" href="{{ route('admin.post.create') }}">Inserisci nuovo post</a>
      </div>
      <div class="col-12 col-md-11 col-lg-9">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Post Date</th>
              <th scope="col">Tags</th>
              <th scope="col">Category</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>

              @foreach ($posts as $post)
              <tr>
                  <th scope="row">{{$post->id}}</th>
                  <td><a href="{{ route('admin.post.show', $post->id ) }}">{{$post->title}}</a></td>
                  <td>{{$post->user->name}}</td>
                  <td>{{$post->getFormattedDate('post_date')}}</td>
                  <td>
                  @forelse ($post->tags as $tag)
                  <span class="badge badge-secondary px-1" style="background-color: {{$tag->color}}">{{$tag->name}}</span>  
                  @empty
                  Non ha tag 
                  @endforelse
                  </td>

                  @if ($post->category)
                  <td>{{$post->category->name}}</td>
                  @else
                  <td>Non ha categoria</td>
                  @endif 

                  <td><a class="btn btn-warning px-3" href="{{ route('admin.post.edit', $post->id ) }}">Modifica</a></td>
                  <td>
                    <form action="{{ route('admin.post.destroy', $post->id ) }}" method="post">
                      @csrf

                      @method('DELETE')
                      
                        <button class="btn btn-danger px-3" type="submit">Cancella</button>
                    </form>
                  </td>
              </tr>
              @endforeach
            
          </tbody>
        </table>
      </div>
      <div class="col-12 py-4 d-flex justify-content-center">
        {{ $posts->links() }} 
      </div>
    </div>
</div>
@endsection