@extends('dashboard.layouts.main')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Detail Resep</h1>
    </div>
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $pastry->nama_resep }}</h2>
            <p>
                <small class="text-muted">
                    Category : <a href="/category/{{ $pastry->category->slug }}"
                        class="text-decoration-none">{{ $pastry->category->nama }}</a>
                        {{ $pastry->created_at->diffForHumans() }}</small>
              </p>
              <a href="/dashboard/pastry" class="btn btn-success me-1"><i class="bi bi-arrow-bar-left me-1"></i>Kembali</a>
              <a href="/dashboard/pastry/{{ $pastry->slug }}/edit" class="btn btn-warning me-1"><i class="bi bi-pencil-square me-1"></i>Edit</a>
              <form action="/dashboard/pastry/{{ $pastry->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure! Delete Resep {{ $pastry->nama_resep }}')">
                    <i class="bi bi-trash3-fill"></i>Hapus</button>
                </form>
                @if ($pastry->image)
                <div style="max-height: 400px">
                    <img src="{{ asset('storage/' . $pastry->image) }}" alt="{{ $pastry->category->nama}}" class="img-fluid mb-3 mt-3" style="width: 100%; height:300px;">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?pastry" alt="{{ $pastry->category->nama}}" class="img-fluid mb-3 mt-3">
                @endif
              <article>
                <h4>Bahan : </h4>
              <p>{!! $pastry->bahan !!}</p>
              <h4>Cara Masak : </h4>
              <p>{!! $pastry->cara_masak !!}</p>
              </article>
        </div>
    </div>
</div>
</main>
@endsection
