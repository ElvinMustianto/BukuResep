@extends('dashboard.layouts.main')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Resep</h1>
    </div>

    <div class="container scroll">
        <form method="POST" action="/dashboard/pastry">
            @csrf
            <div class="mb-3">
                <label for="nama_resep" class="form-label">Nama Resep</label>
                <input type="text" class="form-control @error('nama_resep') is-invalid @enderror"
                    id="nama_resep" name="nama_resep" value="{{ old('nama_resep') }}">
                @error('nama_resep')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror"
                    id="slug" name="slug" value="{{ old('slug') }}">
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="bahan" class="form-label">Bahan</label>
                <input id="bahan" type="hidden" name="bahan" value="{{ old('bahan') }}">
                <trix-editor input="bahan" style="height: 100px;overflow-y: auto;"></trix-editor>
                @error('bahan')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cara_masak" class="form-label">Cara Masak</label>
                <input id="cara_masak" type="hidden" name="cara_masak" value="{{ old('cara_masak') }}">
                <trix-editor input="cara_masak" style="height: 180px;overflow-y: auto;"></trix-editor>
                @error('cara_masak')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-5">Tambah</button>
        </form>
    </div>

    {{-- Untuk membuat slug secara otomatis dengan sluggable menggunakan fetch API--}}
    <script>
        const nama_resep = document.querySelector('#nama_resep');
        const slug = document.querySelector('#slug');

        nama_resep.addEventListener('change', function () {
            fetch('/dashboard/pastry/checkSlug?nama_resep=' + nama_resep.value)
                .then(response => response.json())
                .then(data => {
                    if (data && data.slug) {
                        slug.value = data.slug;
                    } else {
                        console.error('Invalid response:', data);
                    }
                })
                .catch(error => {
                    console.error('Fetch error:', error);
                });
        });

        document.addEventListener('trix-file-accept', function (e) {
            e.preventDefault();
        });
    </script>

</main>

@endsection
