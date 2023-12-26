@extends('layouts.main')

@section('content')

<div class="container mt-4">
    <h1>Halaman Home</h1>
    @foreach($pastrys as $pastry)
    <li>
        <h3>{{ $pastry->nama_resep }}</h3>
    </li>
   
@endforeach
</div>
    
@endsection