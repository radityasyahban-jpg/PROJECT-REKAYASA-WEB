
@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">My Projects</h1>
        <p class="text-muted">
            Berikut adalah beberapa proyek yang telah saya kerjakan
            dalam bidang teknologi informasi.
        </p>
    </div>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://placehold.co/600x350/0d6efd/ffffff?text=Sistem+ERP"
                     class="card-img-top"
                     alt="Sistem ERP"
                     style="height: 200px; object-fit: cover;">

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Sistem ERP</h5>
                    <p class="card-text">
                        Sistem Enterprise Resource Planning untuk membantu
                        perusahaan mengelola proses bisnis secara terintegrasi.
                    </p>
                    <p>
                        <strong>Teknologi:</strong><br>
                        <span class="badge bg-primary">Laravel</span>
                        <span class="badge bg-success">MySQL</span>
                    </p>
                    <a href="{{ route('projects.show', 1) }}"
                       class="btn btn-primary mt-auto">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://placehold.co/600x350/198754/ffffff?text=Sistem+HRIS"
                     class="card-img-top"
                     alt="Sistem HRIS"
                     style="height: 200px; object-fit: cover;">

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Sistem HRIS</h5>
                    <p class="card-text">
                        Sistem Human Resource Information System untuk
                        membantu pengelolaan data karyawan dan administrasi SDM.
                    </p>
                    <p>
                        <strong>Teknologi:</strong><br>
                        <span class="badge bg-primary">Laravel</span>
                        <span class="badge bg-warning text-dark">Bootstrap</span>
                    </p>
                    <a href="{{ route('projects.show', 2) }}"
                       class="btn btn-primary mt-auto">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://placehold.co/600x350/6f42c1/ffffff?text=Sistem+SCM"
                     class="card-img-top"
                     alt="Sistem SCM"
                     style="height: 200px; object-fit: cover;">

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Sistem SCM</h5>
                    <p class="card-text">
                        Sistem Supply Chain Management untuk membantu
                        pengelolaan persediaan, distribusi, dan rantai pasok.
                    </p>
                    <p>
                        <strong>Teknologi:</strong><br>
                        <span class="badge bg-primary">Laravel</span>
                        <span class="badge bg-success">MySQL</span>
                    </p>
                    <a href="{{ route('projects.show', 3) }}"
                       class="btn btn-primary mt-auto">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>

    </div>

    <nav aria-label="Navigasi halaman proyek" class="mt-5">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
            <li class="page-item active">
                <span class="page-link">1</span>
            </li>
            <li class="page-item disabled">
                <span class="page-link">Next</span>
            </li>
        </ul>
    </nav>

</div>
@endsection