@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <h3>Modifica Utente</h3>
            <form action="{{ route('admin.user.update', $user->id ) }}" method="post">
                @csrf
                @method('PATCH')
                
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Cambia il nome utente" value="{{$user->name}}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email"  name="email" placeholder="Cambia l'email" value="{{$user->email}}">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-secondary mx-2">Aggiorna post</button>
                </div>           
            </form>
        </div>
        <div class="col-12 text-center my-3">
            <a class="btn btn-secondary p-2" href="{{route('admin.user.index')}}">Ritorna negli utenti</a>
        </div>
    </div>
</div>
@endsection  