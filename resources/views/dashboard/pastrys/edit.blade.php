@extends('dashboard.layouts.main')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Resep</h1>
      </div>
      <div class="container scroll">
        <form method="POST" action="/dashboard/pastry/{{ $pastry->slug }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="nama_resep" class="form-label">Nama Resep</label>
                <input type="text" class="form-control @error('nama_resep') is-invalid @enderror"
                    id="nama_resep" name="nama_resep" value="{{ old('nama_resep', $pastry->nama_resep) }}">
                @error('nama_resep')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror"
                    id="slug" name="slug" value="{{ old('slug', $pastry->slug) }}">
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
                        <option value="{{ $category->id }}" {{ old('category_id', $pastry->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="hidden" name="oldImage" value="{{ $pastry->image }}">
                @if($pastry->image)
                    <img src="{{ asset('storage/' . $pastry->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="bahan" class="form-label">Bahan</label>
                <input id="bahan" type="hidden" name="bahan" value="{{ old('bahan', $pastry->bahan) }}">
                <trix-editor input="bahan" style="height: 100px;overflow-y: auto;"></trix-editor>
                @error('bahan')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cara_masak" class="form-label">Cara Masak</label>
                <input id="cara_masak" type="hidden" name="cara_masak" value="{{ old('cara_masak', $pastry->cara_masak) }}">
                <trix-editor input="cara_masak" style="height: 180px; overflow-y: auto;"></trix-editor>
                @error('cara_masak')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5 d-flex justify-content-between">
                <a href="/dashboard/pastry" type="submit" class="btn btn-success">Kembali</a>
                <button type="submit" class="btn btn-primary ml-auto">Update Resep</button>
            </div>
    </div>
    </div>
  </main>


    <script>
        //  Untuk membuat slug secara otomatis dengan sluggable menggunakan fetch API
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

</main>

@endsection
