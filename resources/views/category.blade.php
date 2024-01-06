@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($category as $categori)
            <div class="col-md-3 m-3">
                <a href="/pastrys?category={{ $categori->slug }}">
                <div class="card bg-dark text-white shadow-lg p-2 bg-body rounded">
                    <img src="https://source.unsplash.com/500x400?pastry" class="card-img" alt="{{ $categori->nama}}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                      <h5 class="card-title text-center flex-fill p-3 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $categori->nama }}</h5>
                    </div>
                  </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

@endsection
