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
            <h2>Invia il messaggio</h2>
            <form  action="{{ route('guests.contact.send') }}" method="post" >
                @csrf


                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il nome" >
                </div>

                <div class="mb-3">
                    <label for="email_address" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email_address"  name="email_address" placeholder="inserisci l'email" >
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Messaggio</label>
                    <textarea class="form-control" id="message"  name="message" rows="4" placeholder="Inserisci Messaggio"></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-secondary ">Invia Email</button>
                </div>           
            </form>
        </div>
        <div class="col-12 text-center my-3">
            <a class="btn btn-secondary p-2" href="{{route('guests.home')}}">Ritorna nella home</a>
        </div>
    </div>
</div>
@endsection