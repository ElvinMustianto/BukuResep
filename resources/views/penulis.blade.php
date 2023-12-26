@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        @foreach($users as $user)
            <h2>{{ $user->nama }}</h2>
        @endforeach
    </div>
@endsection