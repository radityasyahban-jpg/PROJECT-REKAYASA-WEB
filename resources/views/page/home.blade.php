@extends('layouts.app')

@section('content')
<div class="container text-center py-4">
    <h1 class="display-5 mb-3">Halo, Saya Adi Wangsa Raditya Syahban</h1>

    <img src="{{ asset('images/profile.jpeg') }}"
         alt="Foto Profil"
         class="rounded-circle mb-3"
         width="150"
         height="150"
         style="object-fit: cover;">

    <p class="text-muted">
        Saya seorang mahasiswa Sistem Informasi yang tertarik
        dengan pengembangan web dan teknologi informasi.
    </p>

    <hr class="my-4">

    <p>
        Selamat datang di website portofolio saya.
        Website ini dibuat menggunakan Laravel dan Bootstrap
        untuk menampilkan profil serta proyek yang saya kerjakan.
    </p>

    <a href="{{ url('/projects') }}" class="btn btn-primary mt-2">
        Lihat Projects
    </a>
</div>
@endsection