@extends('dashboard.layouts.main')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Resep Saya</h1>
          </div>
          @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <a href="/dashboard/pastry/create" class="btn btn-primary mt-3">Tambah Resep</a>

    <div class="table-responsive rounded shadow-lg mt-3 col-lg-12">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col" class="fs-6 p-2">No</th>
                    <th scope="col" class="fs-6">Nama Resep</th>
                    <th scope="col" class="fs-6">Category</th>
                    <th scope="col" class="fs-6">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pastrys as $pastry )
                    <tr>
                        <td class="fs-6">{{ $loop->iteration }}</td>
                        <td class="fs-6">{{ $pastry->nama_resep }}</td>
                        <td class="fs-6">{{ $pastry->category->nama }}</td>
                        <td>
                            <a href="/dashboard/pastry/{{ $pastry->slug }}" class="badge bg-info ms-1"><i class="bi bi-eye-fill"></i></a>
                            <a href="/dashboard/pastry/{{ $pastry->slug }}/edit" class="badge bg-warning ms-1"><i class="bi bi-pencil-square"></i></a>
                            <form action="/dashboard/pastry/{{ $pastry->slug }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0 ms-1" onclick="return confirm('Are you sure! Delete Resep {{ $pastry->nama_resep }}')">
                                <i class="bi bi-trash3-fill"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   </div>
</main>

@endsection
