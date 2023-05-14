@extends('layouts.app', ['title' => 'Register - Games Data'])
@section('content')

<div class="col-md-8">
    <div class="card border-0 shadow rounded">
        <div class="card-body">
            <h4 class="font-weight-bold">REGISTER</h4>
            <hr>
            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-uppercase">Full Name</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Full Name"/>

                            @error('name')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="font-weight-bold text-uppercase">Email address</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror" placeholder="Email"/>

                            @error('email')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="font-weight-bold text-uppercase">Password</label>

                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                placeholder="Enter Password"/>

                            @error('password')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-uppercase">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                placeholder="Confirm Password" />
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
    <div class="login mt-3 text-center">
    <p>Already have an account? <a href="/login">Log In</a></p>
</div>
@endsection
