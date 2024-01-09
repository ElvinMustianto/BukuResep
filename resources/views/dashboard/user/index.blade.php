@extends('dashboard.layouts.main')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Profile</h1>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
    <div class="container">
        <div class="card mb-3">
            <div class="card-body text-center">
                <div class="float-end">
                    <a href="/dashboard/user/{{ $user->id }}/edit" class="text-decotartion-none text-dark"><i class="bi bi-pencil-square me-1"></i>Edit</a>
                </div>
                @if($user->image)
                <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Image" class="rounded-circle" style="width: 150px; height: 150px;">
                @else
                <img src="https://source.unsplash.com/150x150?human" alt="Default Profile Image" class="rounded-circle" style="width: 150px; height: 150px;">
                @endif
                <div class="card mx-auto mt-4" style="width: auto;">
                    <h4 class="card-title font-monospace mt-3">{{  $user->nama  }}</h4>
                    <ul class="list-group list-group-flush text-start ms-2">
                        <li class="list-group-item font-monospace">Username: {{ $user->username }}</li>
                        <li class="list-group-item font-monospace">Email: {{ $user->email }}</li>
                        <li class="list-group-item font-monospace">Bio: {!! $user->description !!}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
