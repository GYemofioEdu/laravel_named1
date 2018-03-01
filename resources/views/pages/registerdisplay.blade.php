@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <h1 class="card-header">Thank you: {{$usr_fullname}}</h1>
        <div class="card-body">
            <h5>
                <p class="card-text">Email address: wanted to send this but didn't work</p>
                <p class="card-text">Encrypted password: could not pass</p>
                <p class="card-text">Encrypted password (confirmation): could not pass</p>
            </h5><br>
            <a href="{{route('home')}}" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
@endsection
