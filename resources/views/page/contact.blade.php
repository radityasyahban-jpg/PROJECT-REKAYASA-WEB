@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">Contact Me</h1>
        <p class="text-muted">
            Silakan hubungi saya jika ingin berdiskusi atau bekerja sama.
        </p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card shadow-sm">
                <div class="card-body p-4">

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                placeholder="Masukkan nama kamu"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="nama@email.com"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea
                                class="form-control"
                                id="message"
                                name="message"
                                rows="5"
                                placeholder="Tuliskan pesan kamu"
                                required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Kirim Pesan
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection