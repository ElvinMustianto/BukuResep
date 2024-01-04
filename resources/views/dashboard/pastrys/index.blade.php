@extends('dashboard.layouts.main')
@section('content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Resep Saya</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
       {{ session('success') }}
      </div>
    @endif

    <a href="/dashboard/pastry/create" class="btn btn-primary mt-3">Tambah Resep</a>

    <div class="table-responsive rounded shadow-lg mt-3">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col" class="fs-5 p-2">No</th>
                    <th scope="col" class="fs-5">Nama Resep</th>
                    <th scope="col" class="fs-5">Category</th>
                    <th scope="col" class="fs-5">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pastrys as $pastry )
                    <tr>
                        <td class="fs-5">{{ $loop->iteration }}</td>
                        <td class="fs-5">{{ $pastry->nama_resep }}</td>
                        <td class="fs-5">{{ $pastry->category->nama }}</td>
                        <td>
                            <a href="/dashboard/pastry/{{ $pastry->slug }}" class="btn btn-info ms-1"><i class="bi bi-eye-fill"></i></a>
                            <a href="" class="btn btn-warning ms-1"><i class="bi bi-pencil-square"></i></a>
                            <a href="" class="btn btn-danger ms-1"><i class="bi bi-trash3-fill"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </main>

@endsection
