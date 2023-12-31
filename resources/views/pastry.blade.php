@extends('layouts.main')
@section('content')
    <div class="container">
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
                  <img src="https://source.unsplash.com/1200x400?pastry" alt="{{ $pastry->category->nama}}"
                  class="img-fluid mb-3">
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