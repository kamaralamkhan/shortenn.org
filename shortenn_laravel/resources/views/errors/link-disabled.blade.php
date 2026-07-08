@extends('layouts.app')

@section('title', 'Link Disabled')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <i class="bi bi-slash-circle display-1 text-secondary"></i>
                    <h1 class="mt-4 text-secondary">Link Disabled</h1>
                    <p class="lead">This short link has been disabled by its owner.</p>
                    <p class="text-muted">The link is temporarily or permanently unavailable.</p>
                    <a href="{{ route('home') }}" class="btn btn-primary mt-3">Go to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
