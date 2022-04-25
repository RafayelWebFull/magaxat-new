@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row mx-auto">
            <div class="form-register">
                <h1>Welcome Back</h1>
                <h2>Sign In</h2>
                <form>
                    <div class="d-flex justify-content-between">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="ms-2">Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="ms-2">Phone Number</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="ms-2">E-Mail</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="ms-2">Type</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>User</option>
                                <option>Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="ms-2">Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="ms-2">Additional Types</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option selected disabled>Organisation</option>
                                <option>Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="description">
                        <label for="exampleInputEmail1" class="ms-2">Description</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Decs">
                    </div>
                    <button type="submit" class="btn" id="sign-in-button"><a href="/register"
                                                                             class="text-white text-decoration-none">Sign
                            In</a></button>
                </form>
            </div>
        </div>
    </div>
@endsection
