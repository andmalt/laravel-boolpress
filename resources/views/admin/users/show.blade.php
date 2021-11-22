@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="card-title">{{$user->name}}</h3>
                    <h5 class="card-title">email: {{$user->email}}</h5> 
                    @if ($user->roles)
                        @foreach ($user->roles as $role)
                        <p>Ruolo {{$role->name}}</p>  
                        @endforeach
                    @else
                    <p>Non ha Ruolo</p> 
                    @endif
                  <p class="card-text">created {{$user->created_at}}</p>
                </div>
            </div>
        </div>
        <div class="col-12 text-center my-2">
            <a class="btn btn-secondary p-2" href="{{route('admin.user.index')}}">Ritorna negli utenti</a>
        </div>
    </div>
</div>
@endsection