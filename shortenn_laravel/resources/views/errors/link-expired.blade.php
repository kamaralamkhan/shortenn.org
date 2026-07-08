@extends('layouts.app')

@section('title', 'Link Expired')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <i class="bi bi-calendar-x display-1 text-warning"></i>
                    <h1 class="mt-4 text-warning">Link Expired</h1>
                    <p class="lead">This short link has expired and is no longer available.</p>
                    <p class="text-muted">The creator of this link set an expiration date, which has now passed.</p>
                    <a href="{{ route('home') }}" class="btn btn-primary mt-3">Go to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
