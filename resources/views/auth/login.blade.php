@extends('layouts.app')

@section('title', 'Register')



@section('content')
<h3>Login</h3>
<form action="/login" class="form-control" method='POST'>
    @csrf
    <div class="form-group mt-3">
        <label for="email">Email</label>
        <input id='email' name='email' type="email">
    </div>
    @error('email')
    <div class="alert alert-danger"> {{$message}}</div>
    @enderror
    <div class="form-group mt-3">
        <label for=" password">Password</label>
        <input id='password' name='password' type="password">
    </div>
    @error('password')
    <div class="alert alert-danger"> {{$message}}</div>
    @enderror
    <button type='submit' class="btn btn-primary">Submit</button>
    @if($invalid_credentials ?? false )
    <div class="alert alert-danger"> Invalid credentials. Please try again.</div>
    @endif
</form>



@endsection