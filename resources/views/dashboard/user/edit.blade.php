@extends('dashboard.layouts.main')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Profile</h1>
    </div>
    <div class="container scroll">
        <form method="POST" action="/dashboard/user/{{ $user->id }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                    id="nama" name="nama" value="{{ old('nama', $user->nama) }}">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror"
                    id="username" name="username" value="{{ old('username', $user->username) }}">
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="hidden" name="oldImage" value="{{ $user->image }}">
                @if($user->image)
                    <img src="{{ asset('storage/' . $user->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block rounded-circle" style="height: 100px; width: 100px">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5" style="height: 100px; width: 100px">
                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Bio</label>
                <input id="description" type="hidden" name="description" value="{{ old('description', $user->description) }}">
                <trix-editor input="description" style="height: 180px; overflow-y: auto;"></trix-editor>
                @error('description')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5 d-flex justify-content-between">
                <a href="/dashboard/user" type="submit" class="btn btn-success">Kembali</a>
                <button type="submit" class="btn btn-primary ml-auto">Update Profile</button>
            </div>
    </div>
</main>
<script>
     document.addEventListener('trix-file-accept', function (e) {
            e.preventDefault();
        });

        // Untuk menampilkan gambar
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const reader = new FileReader();

            reader.onload = function (e) {
                imgPreview.src = e.target.result;
            };

            reader.readAsDataURL(image.files[0]);
        }
</script>
@endsection
