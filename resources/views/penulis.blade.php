@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($users as $user)
            <div class="col-md-4">
                <div class="card mb-3 m-2 shadow-lg p-2 bg-body rounded">
                    <div class="row g-0">
                      <div class="col-md-3 d-flex justyfy-content-center">
                        <img src="https://source.unsplash.com/500x300?human" class="img-fluid rounded-start" alt="{{ $user->nama }}">
                      </div>
                      <div class="col-md-9">
                        <div class="card-body">
                          <h5 class="card-title"><a href="/pastrys?user={{ $user->username }}" class="text-dark text-decoration-none">
                            {{ $user->nama }}</a></h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection