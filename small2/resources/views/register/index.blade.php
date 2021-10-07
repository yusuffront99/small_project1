@extends('layouts.main')

@section('container')

    <div class="container col-sm-4">
        <div class="text-center">
            <h1>Form register</h1><hr>
        </div>
        <form action="/register" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="handphone" class="form-label">Handphone</label>
                <input type="text" class="form-control @error('handphone')is-invalid @enderror" id="handphone" name="handphone">
                @error('handphone')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email">
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('email')is-invalid @enderror" id="password" name="password">
                @error('password')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary col-lg-12">Login</button>
        </form>

        <div class=" text-center mt-3">
            <small>Are your'ne create account yet? <a href="/login">Now login</a></small>
        </div>
    </div>
@endsection