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
              <th scope="col">Utente</th>
              <th scope="col">Email</th>
              <th scope="col">Ruolo</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>

              @foreach ($users as $user)
              <tr>
                  <th scope="row">{{$user->id}}</th>
                  <td><a href="{{ route('admin.user.show', $user->id ) }}">{{$user->name}}</a></td>
                  <td>{{$user->email}}</td>
                  <td>
                  @forelse ($user->roles as $role)
                  <span class="badge badge-secondary px-1" style="background-color: {{$role->color}}">{{$role->name}}</span>  
                  @empty
                  Non ha tag 
                  @endforelse
                  </td>
                  <td><a class="btn btn-warning px-3" href="{{ route('admin.user.edit', $user->id ) }}">Modifica</a></td>
                  <td>
                    <form action="{{ route('admin.post.destroy', $user->id ) }}" method="post">
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
    </div>
</div>
@endsection