
@extends('admin.template')

@section('title', 'Data Project')

@section('page-title', 'Data Project')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold">Daftar Project</h5>

        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
            + Tambah Project
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Technology</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th width="160">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($projects as $project)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    @if ($project->image && file_exists(public_path('images/' . $project->image)))
                                        <img
                                            src="{{ asset('images/' . $project->image) }}"
                                            alt="{{ $project->title }}"
                                            width="80"
                                            class="img-thumbnail">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>

                                <td>{{ $project->title }}</td>

                                <td>{{ $project->teknologi }}</td>

                                <td>{{ Str::limit($project->description, 50) }}</td>

                                <td>
                                    @if ($project->status === 'active')
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-secondary">Archived</span>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('admin.projects.edit', $project->id) }}"
                                       class="btn btn-sm btn-warning">
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('admin.projects.destroy', $project->id) }}"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus project ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted">
                                    Belum ada data project.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

@endsection
