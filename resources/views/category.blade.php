@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        @foreach($category as $categori)
            <h2>{{ $categori->nama }}</h2>
        @endforeach
    </div>
@endsection