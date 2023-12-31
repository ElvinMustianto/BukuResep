@extends('layouts.main')
@section('content')
    <div class="container-fluid d-flex justify-content-center mt-5 rounded mb-5">
      <div class="col-md-8 col-lg-6 col-xxl-3">
        <div class="card mb-0 shadow-lg p-3 rounded">
          <div class="card-body">
            <h3 class="text-center font-monospace">BUKU RESEP</h3>
            <h5 class="text-center font-monospace">LOGIN</h5>
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="form-check">
                  <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                  <label class="form-check-label text-dark me-1" for="flexCheckChecked">
                    Remeber this Device
                  </label>
                </div>
                <a class="text-dark fw-bold text-decoration-none" href="./index.html">Forgot Password ?</a>
              </div>
              <a href="./index.html" class="btn btn-primary w-100 fs-4 mb-4 rounded-2">Sign In</a>
              <div class="d-flex align-items-center justify-content-center">
                <a class="text-dark fw-bold ms-2 text-decoration-none" href="/register">Create an account</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>    
@endsection