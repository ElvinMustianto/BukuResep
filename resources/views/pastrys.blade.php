@extends('layouts.main')

@section('content')

<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/pastrys">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('user'))
                    <input type="hidden" name="user" value="{{ request('user') }}">
                @endif
                <div class="input-group mb-3 shadow-lg p-3 mb-5 bg-body rounded">
                    <input type="text" class="form-control rounded" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary rounded" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>
    @if ($pastrys->count())
    <div class="card mb-3 shadow-lg p-3 mb-5 bg-body rounded">
        <img src="https://source.unsplash.com/1200x300?pastry" class="card-img-top" alt="{{ $pastrys[0]->category->nama }}">
        <div class="card-body text-center">
          <h5 class="card-title">
            <a href="/pastry/{{ $pastrys[0]->slug }}" class="text-decoration-none text-dark">{{ $pastrys[0]->nama_resep }}</a>
          <p class="card-text">{{ $pastrys[0]->excerpt}}</p>
          <p>
            <small class="text-muted">
                Oleh : <a href="/pastrys?user={{ $pastrys[0]->user->username }}" class="text-decoration-none">{{ $pastrys[0]->user->nama }}</a>
            </small>
        </p>
        <p>
            <small class="text-muted">
                Category : <a href="/pastrys?category={{ $pastrys[0]->category->slug }}" class="text-decoration-none">{{ $pastrys[0]->category->nama }}</a>
            </small>
        </p>
        <p>
            <small class="text-muted">
                {{ $pastrys[0]->created_at->diffForHumans() }}
            </small>
        </p>
        </div>
      </div>
    

    <div class="container">
        <div class="row justify-content-center">
            @foreach ($pastrys->skip(1) as $pastry)
            <div class="col-md-4">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <img src="https://source.unsplash.com/500x300?pastry" class="card-img-top" alt="{{ $pastry->category->nama}}">
                    <div class="card-body">
                      <h5 class="card-title">
                        <a href="/pastry/{{ $pastry->slug }}" class="text-decoration-none text-dark">{{ $pastry->nama_resep }}</a>
                      </h5>
                      <p class="card-text">{{ $pastry->excerpt }}</p>
                      <p>
                        <small class="text-muted">
                            Oleh : <a href="/pastrys?user={{ $pastry->user->username }}" class="text-decoration-none">{{ $pastry->user->nama }}</a>
                        </small>
                    </p>
                    <p>
                        <small class="text-muted">
                            Category : <a href="/pastrys?category={{ $pastry->category->slug }}" class="text-decoration-none">{{ $pastry->category->nama }}</a>
                        </small>
                    </p>
                    <p>
                        <small class="text-muted">
                            {{ $pastry->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <a href="/pastry/{{ $pastry->slug }}" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
        <p class="text-center fs-4">Resep Not Found.</p>
    @endif
    <div class="d-flex justify-content-end">
        {{ $pastrys->links() }}
    </div>
</div>

    
@endsection