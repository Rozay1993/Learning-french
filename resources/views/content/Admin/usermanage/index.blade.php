@extends('layouts/adminContentNavbarLayout')

@section('title', 'Learning-French || Home')

@section('vendor-style')
{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
<style>
    .user-table tbody tr:hover {
        background-color: antiquewhite;
    }

    .top-100px {
        top: 100px;
    }

    .end-50px {
        right: 50px;
    }
</style>
@endsection

@section('vendor-script')
@endsection

@section('page-script')
@endsection

@section('content')
<x-page-header first="Admin" second="Users"></x-page-header>
<div class="card">
    <div class="card-body">
        <h2 class="text-center text-uppercase text-primary">Users</h2>
        <div class="mt-5">
            <div class="table-responsive">
                <table class="table table-border-bottom-0 user-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Register_at</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                        <tr>
                            <td>{{$users->firstItem()+$key}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @if ($user->status=="active")
                                <span class="badge bg-label-primary">Active</span>
                                @else
                                <span class="badge bg-label-danger">Suspended</span>
                                @endif
                            </td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->role!=0? "Admin": "User"}}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <form action="{{route('admin-user-status-change',["id"=>$user->id, "status"=>$user->status==="active"?"suspended":"active"])}}" method="post">
                                            @method('PUT')
                                            @csrf
                                            <a class="dropdown-item" href="{{ route('admin-user-status-change',["id"=>$user->id, "status"=>$user->status==="active"?"suspended":"active"]) }}"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                @if ($user->status=="active")
                                                    <i class="bx bx-user-x me-2"></i>Suspend
                                                @else
                                                    <i class="bx bx-user-check me-2"></i>active
                                                @endif
                                            </a>
                                        </form>
                                        <form action="{{route('admin-user-delete',$user->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a class="dropdown-item" href="{{ route('admin-user-delete',$user->id) }}"
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
            {!! $users->links() !!}
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