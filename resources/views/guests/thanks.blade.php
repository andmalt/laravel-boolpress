@extends('layouts.app')



@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
          <div class="card p-3">
            <div class="card-header">
                <h1>Grazie per averci contattato!!</h1>
            </div>
            <div class="card-body">
                <p>
                    <a href="{{ route('guests.home')}}">Ritorna alla Home</a>
                </p>
            </div>
          </div>
        </div>
    </div>
@endsection