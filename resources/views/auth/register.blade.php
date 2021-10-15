@extends('layouts.app')

@section('title', 'Register')



@section('content')
<h3>Register new user</h3>
<form action="/register" class="form-control" method='POST'>
    @csrf
    <div class="form-group mt-3">
        <label for="name">Name</label>
        <input id='name' name='name' type="name">
    </div>
    @error('name')
    <div class="alert alert-danger"> {{$message}}</div>
    @enderror
    <div class="form-group mt-3">
        <label for="email">Email</label>
        <input id='email' name='email' type="email">
    </div>
    @error('email')
    <div class="alert alert-danger"> {{$message}}</div>
    @enderror
    <div class="form-group mt-3"">
        <label for=" password">Password</label>
        <input id='password' name='password' type="password">
    </div>
    @error('password')
    <div class="alert alert-danger"> {{$message}}</div>
    @enderror
    <div class="form-group mt-3"">
        <label for=" password_confirmation">Confirm your password</label>
        <input id='password_confirmation' name='password_confirmation' type="password">
    </div>
    @error('password_confirmation')
    <div class="alert alert-danger"> {{$message}}</div>
    @enderror
    <button type='submit' class="btn btn-primary">Submit</button>
</form>



@endsection