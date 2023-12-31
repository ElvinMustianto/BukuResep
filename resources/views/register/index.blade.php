@extends('layouts.main')
@section('content')
<div class="container-fluid d-flex justify-content-center mt-5 rounded mb-5">
  <div class="col-md-8 col-lg-6 col-xxl-3">
    <div class="card mb-0 shadow-lg p-3 rounded">
      <div class="card-body">
        <h3 class="text-center font-monospace">BUKU RESEP</h3>
        <h5 class="text-center font-monospace">REGISTRASI</h5>
        <form action="/register" method="POST">
          <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Name</label>
            <input type="text" name="nama" class="form-control" id="nama" aria-describedby="textHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="textHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>
          <a href="./index.html" class="btn btn-primary w-100 fs-4 mb-4 rounded-2">Sign Up</a>
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