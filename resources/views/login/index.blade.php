@extends('layouts.main')
@section('content')


    <div class="container-fluid d-flex justify-content-center mt-5 rounded mb-5">
      <div class="col-md-8 col-lg-6 col-xxl-3">
        <div class="card mb-0 shadow-lg p-3 rounded">
          <div class="card-body">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError ') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <h3 class="text-center font-monospace">BUKU RESEP</h3>
            <h5 class="text-center font-monospace">LOGIN</h5>
            <form action="/login" method="POST">
                @csrf
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
              </div>
              {{-- <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="form-check">
                  <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                  <label class="form-check-label text-dark me-1" for="flexCheckChecked">
                    Remeber this Device
                  </label>
                </div>
                <a class="text-dark fw-bold text-decoration-none" href="./index.html">Forgot Password ?</a>
              </div> --}}
              <button type="submit" class="btn btn-primary w-100 fs-4 mb-4 rounded-2">Sign In</button>
              <div class="d-flex align-items-center justify-content-center">
                <a class="text-dark fw-bold ms-2 text-decoration-none" href="/register">Create an account</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
