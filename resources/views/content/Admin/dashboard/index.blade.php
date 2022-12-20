@extends('layouts/adminContentNavbarLayout')

@section('title', 'Learning-French || Home')

@section('vendor-style')
@endsection

@section('vendor-script')
@endsection

@section('page-script')
@endsection

@section('content')
<x-page-header first="Admin" second="Dashboard"></x-page-header>
<div class="card">
    <div class="card-body">
        <div class="my-5">
            <div class="text-center">
                <h1>
                    Dashboard
                </h1>
            </div>
        </div>
    </div>
</div>
@endsection