@extends('layouts/adminContentNavbarLayout')

@section('title', 'Learning-French || Home')

@section('vendor-style')
{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
<style>
</style>
@endsection

@section('vendor-script')
@endsection

@section('page-script')
@endsection

@section('content')
<x-page-header first="Admin" second="Advertisement"></x-page-header>
<div class="card">
    <div class="card-body">
        <h2 class="text-center text-uppercase text-primary">ADVERTISEMENT</h2>
        <div class="mt-5">
            <div class="table-responsive">
                <table class="table table-border-bottom-0 user-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>URL</th>
                            <th>Status</th>
                            <th>Updated date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($advertisements as $key => $advertisement)
                        <tr>
                            <td>{{$advertisements->firstItem()+$key}}</td>
                            <td>{{$advertisement->name}}</td>
                            <td>{{$advertisement->url}}</td>
                            <td>
                                @if ($advertisement->status=="active")
                                <span class="badge bg-label-primary">SHOW</span>
                                @else
                                <span class="badge bg-label-danger">HIDE</span>
                                @endif
                            </td>
                            <td>{{$advertisement->updated_at}}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <form action="{{route('admin-advertisement-status-change',["id"=>$user->id, "status"=>$advertisement->status==="show"?"hide":"show"])}}" method="post">
                                            @method('PUT')
                                            @csrf
                                            <a class="dropdown-item" href="{{ route('admin-advertisement-status-change',["id"=>$advertisement->id, "status"=>$advertisement->status==="show"?"hide":"show"]) }}"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                @if ($advertisement->status=="shoe")
                                                    <i class="bx bx-user-x me-2"></i>hide
                                                @else
                                                    <i class="bx bx-user-check me-2"></i>show
                                                @endif
                                            </a>
                                        </form>
                                        <form action="{{route('admin-user-delete',$advertisement->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a class="dropdown-item" href="{{ route('admin-advertisement-detroy',$advertisement->id) }}"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                <i class='bx bx-trash me-2'></i>
                                                <span class="align-middle">Delete</span>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-3">
            {!! $advertisements->links() !!}
        </div>
        @if ($action)
        <div class="toast-container">
            <!-- Success Toast -->
            <div class="bs-toast toast fade show bg-success position-fixed top-100px end-50px" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <div class=""><i class="bx bxs-bell bx-tada"></i></div>
                    <div class="me-auto fw-semibold">Success</div>
                    {{-- <small>11 mins ago</small> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{$message}}
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection