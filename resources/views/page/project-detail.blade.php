
@extends('layouts.app')

@section('content')
<div class="container py-4">

    <a href="{{ route('projects') }}" class="btn btn-outline-primary mb-4">
        &larr; Kembali ke Projects
    </a>

    <div class="card shadow-sm">
        <div class="card-body p-4">

            <h1 class="display-6 fw-bold mb-3">
                {{ $project['title'] }}
            </h1>

            <p class="text-muted">
                {{ $project['description'] }}
            </p>

            <hr>

            <h5 class="mb-3">Teknologi yang Digunakan</h5>

            @foreach ($project['technologies'] as $technology)
                <span class="badge bg-primary me-1">
                    {{ $technology }}
                </span>
            @endforeach

        </div>
    </div>

</div>
@endsection