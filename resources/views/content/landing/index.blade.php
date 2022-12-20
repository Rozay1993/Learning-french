@extends('layouts/blankLayout')

@section('title', 'Landing')

@section('page-style')
    <style>
        .auth-buttons{
            width: 100px;
            left: calc(50% - 50px);
            top: calc(50% - 50px);
        }
    </style>
@endsection

@section('content')
    <div class="container-xxl">
        <div class="container-py-y">
            @if (Route::has('login'))
                <div class="position-fixed auth-buttons">
                    <div class="list-group">
                        @auth
                            <a href="{{ route('client-home') }}" class="text-center list-group-item text-sm text-gray-900 dark:text-gray-700 underline">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-center list-group-item text-sm text-gray-900 dark:text-gray-700 underline">
                                Log in
                            </a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-center list-group-item ml-4 text-sm text-gray-900 dark:text-gray-700 underline">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection