
@extends('admin.template')

@section('title', 'Tambah Project')

@section('page-title', 'Tambah Project')

@section('content')

<div class="card shadow-sm border-0">
    <div class="card-body p-4">

        <h5 class="fw-bold mb-4">Form Tambah Project</h5>

        <form action="{{ route('admin.projects.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama Project</label>
                    <input type="text"
                           name="title"
                           class="form-control"
                           value="{{ old('title') }}"
                           required>
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Kategori</label>
                    <input type="text"
                           name="kategori"
                           class="form-control"
                           value="{{ old('kategori') }}">
                    @error('kategori')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Technology</label>
                    <input type="text"
                           name="teknologi"
                           class="form-control"
                           value="{{ old('teknologi') }}"
                           required>
                    @error('teknologi')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="">Pilih Status</option>
                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="archived" {{ old('status') == 'archived' ? 'selected' : '' }}>Archived</option>
                    </select>
                    @error('status')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Gambar Project</label>
                    <input type="file"
                           name="image"
                           class="form-control"
                           accept=".jpg,.jpeg,.png,.gif,.svg">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description"
                              rows="4"
                              class="form-control"
                              required>{{ old('description') }}</textarea>
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">
                        Simpan Project
                    </button>

                    <a href="{{ route('admin.projects.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </div>
        </form>

    </div>
</div>

@endsection
