@extends('layouts.main')
@section('content')
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $pastry->nama_resep }}</h2>
                <p>
                    <small class="text-muted">
                        Oleh : <a href="/user/{{ $pastry->user->username }}"
                            class="text-decoration-none">{{ $pastry->user->nama }}</a>
                        Category : <a href="/category/{{ $pastry->category->slug }}"
                            class="text-decoration-none">{{ $pastry->category->nama }}</a>
                            {{ $pastry->created_at->diffForHumans() }}</small>
                  </p>
                  @if ($pastry->image)
                  <div style="max-height: 400px">
                      <img src="{{ asset('storage/' . $pastry->image) }}" alt="{{ $pastry->category->nama}}" class="img-fluid mb-3" style="width: 100%; height:300px;">
                  </div>
                  @else
                  <img src="https://source.unsplash.com/1200x400?pastry" alt="{{ $pastry->category->nama}}" class="img-fluid mb-3">
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
@endsection
