@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-title pl-3">
            <h1>Register</h1>
            <p class="lead">To be replaced eventually but for now, a page with a signup form that has the following fields: </p>
            <p class="lead">Name, Email, and (2 Password fields to confirm the Password)</p>
        </div>

        <div class="card-body">
            <form role="form" id="registration-form" action="{{route('register')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="usr_fullname">Name</label>
                    <input class="form-control" type="text" name="usr_fullname" id="usr_fullname" placeholder="FirstName MiddleInitial LastName">
                </div>
                <div class="form-group">
                    <label for="usr_email">Your email address</label>
                    <input class="form-control" type="email" name="usr_email" id="usr_email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="usr_pwd">Password</label>
                    <input class="form-control" type="password" name="usr_pwd" id="usr_pwd" placeholder="*******">
                </div>
                <div class="form-group">
                    <label for="usr_pwd2">Confirm Password</label>
                    <input class="form-control" type="password" name="usr_pwd2" id="usr_pwd2" placeholder="*******">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>

    </div>
@endsection
