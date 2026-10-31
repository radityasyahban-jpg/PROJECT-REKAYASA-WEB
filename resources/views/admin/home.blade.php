
@extends('admin.template')

@section('title', 'Dashboard Admin')

@section('page-title', 'Dashboard')

@section('content')

<div class="row g-4">

    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <h5 class="text-muted">Selamat Datang</h5>
                <h3 class="fw-bold">Admin MyProfile</h3>
                <p class="mb-0">
                    Selamat datang di halaman administrator website MyProfile.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <h5 class="text-muted">Manajemen Data</h5>
                <h3 class="fw-bold">Data Project</h3>
                <p class="mb-3">
                    Kelola informasi project melalui menu Data Project.
                </p>
                <a href="{{ route('admin.projects.index') }}"
                   class="btn btn-primary">
                    Kelola Project
                </a>
            </div>
        </div>
    </div>

</div>

@endsection
