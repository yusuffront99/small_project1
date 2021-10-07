@extends('layouts.main')

@section('container')

    <div class="container col-sm-4">
        <div class="text-center">
            <h1>Form Login</h1><hr>
        </div>
        <form action="/register" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary col-lg-12">Login</button>
        </form>

        <div class=" text-center mt-3">
            <small>are you already create an account? <a href="/register">Now register</a></small>
        </div>
    </div>
@endsection