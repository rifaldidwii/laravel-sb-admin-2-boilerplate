@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text"
                                    class="form-control form-control-user @error('name') is-invalid @enderror" id="name"
                                    name="name" value="{{ old('name') }}" placeholder=" Name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email"
                                    class="form-control form-control-user @error('email') is-invalid @enderror" id="
                                    email" name="email" value="{{ old('email') }}"
                                    placeholder="Email Address">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password"
                                        class="form-control form-control-user @error('password') is-invalid @enderror"
                                        id="password" name="password" placeholder="Password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                        id="password_confirmation" name="password_confirmation"
                                        placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                            <hr>
                        </form>
                        @if(Route::has('password.request'))
                            <div class="text-center">
                                <a class="small" href="{{ route('password.request') }}">Forgot
                                    Password?</a>
                            </div>
                        @endif
                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">Already have an account?
                                Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
