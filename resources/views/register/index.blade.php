@extends('layouts.main')
@section('content')
<div class="container-fluid d-flex justify-content-center mt-5 rounded mb-5">
  <div class="col-md-8 col-lg-6 col-xxl-3">
    <div class="card mb-0 shadow-lg p-3 rounded">
      <div class="card-body">
        <h3 class="text-center font-monospace">BUKU RESEP</h3>
        <h5 class="text-center font-monospace">REGISTRASI</h5>
        <form action="/register" method="POST">
          @csrf
          <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ old('nama') }}">
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label  class="form-label">Username</label>
            <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="username" value="{{ old('username') }}">
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-4">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" value="{{ old('password') }}">
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary w-100 fs-4 mb-4 rounded-2">Sign Up</button>
          <div class="d-flex align-items-center justify-content-center">
            <p class="fs-6 mb-0 ">Already have an Account?</p>
            <a class="text-primary fw-bold ms-2 text-decoration-none text-dark" href="/login">Sign In</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
