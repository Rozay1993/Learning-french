@extends('layouts/blankLayout')

@section('title', 'Login')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="{{url('/')}}" class="app-brand-link gap-2">
                            <span
                                class="app-brand-logo demo">@include('_partials.macros',["width"=>25,"withbg"=>'#696cff'])</span>
                            <span
                                class="app-brand-text demo text-body fw-bolder">{{config('variables.templateName')}}</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2">Welcome to {{config('variables.templateName')}}! 👋</h4>
                    <p class="mb-4">Please sign-in to your account to learning {{config('variables.foreignName')}}</p>
                    
                    <div class="btn-group w-100 mt-2 mb-4">
                        <a href="{{route('login')}}" class="btn btn-primary w-50" aria-current="page">Login</a>
                        <a href="{{route('register')}}" class="btn btn-secondary w-50">Register</a>
                    </div>

                    <form id="formAuthentication" class="mb-3" action={{route('login')}} method="POST">
                        @csrf
                        @if ($errors->has('email'))
                        <div class="alert alert-danger" role="alert">
                            {{$errors->get('email')[0]}}
                        </div>
                        @endif
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{old('email')}}"
                                placeholder="Enter your email" autofocus>
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                                <a href={{route('password.request')}}>
                                    <small>Forgot Password?</small>
                                </a>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me">
                                <label class="form-check-label" for="remember-me">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                        </div>
                    </form>

                    <p class="text-center">
                        <span>New on our platform?</span>
                        <a href={{route('register')}}>
                            <span>Create an account</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <!-- /Register -->
    </div>
</div>
</div>
@endsection