@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row mx-auto">
            <div class="form-login">
                <h1>Welcome Back</h1>
                <h2>Login</h2>
                <form action="/login" method="POST">
                    @if ($errors->has('email'))
                        <div class="help-block bg-danger mb-4 mt-4">
                            <strong class="text-white">{{ $errors->first('email') }}</strong>
                        </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="ms-2">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="ms-2">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                               placeholder="Password">
                    </div>
                    <div class="me-auto" id="forgot-password">
                        <a href="" class="text-decoration-none ">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn" id="login-button">Login</button>
                    <h4 class="mt-5 text-center">
                        OR
                    </h4>
                    <button type="submit" class="btn" id="sign-in-button"><a href="/register"
                                                                             class="text-white text-decoration-none">Sign
                            In</a></button>
                </form>
            </div>
        </div>
    </div>
@endsection
