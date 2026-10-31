
@extends('admin.template')

@section('title', 'Edit Project')

@section('page-title', 'Edit Project')

@section('content')

<div class="card shadow-sm border-0">
    <div class="card-body p-4">

        <h5 class="fw-bold mb-4">Form Edit Project</h5>

        <form action="{{ route('admin.projects.update', $project->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama Project</label>
                    <input type="text"
                           name="title"
                           class="form-control"
                           value="{{ old('title', $project->title) }}"
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
                           value="{{ old('kategori', $project->kategori) }}">
                    @error('kategori')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Technology</label>
                    <input type="text"
                           name="teknologi"
                           class="form-control"
                           value="{{ old('teknologi', $project->teknologi) }}"
                           required>
                    @error('teknologi')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="active" {{ old('status', $project->status) == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="archived" {{ old('status', $project->status) == 'archived' ? 'selected' : '' }}>Archived</option>
                    </select>
                    @error('status')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Gambar Project Saat Ini</label>

                    @if ($project->image)
                        <div class="mb-2">
                            <img src="{{ asset('images/' . $project->image) }}"
                                 alt="{{ $project->title }}"
                                 style="max-width: 180px;"
                                 class="img-thumbnail">
                        </div>
                    @else
                        <p class="text-muted">Belum ada gambar.</p>
                    @endif

                    <label class="form-label">Ganti Gambar (Opsional)</label>
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
                              required>{{ old('description', $project->description) }}</textarea>
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">
                        Update Project
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
