@extends('layouts.app')

@section('content')

<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">MDR Login App</h1>
            <p class="lead text-muted">A simple login App using Laravel 8</p>
            <p>
                <a href="{{url('login')}}" class="btn btn-warning my-2">Login</a>
                <a href="{{url('register')}}" class="btn btn-secondary my-2">Register</a>
            </p>
        </div>
    </div>
</section>

@endsection
