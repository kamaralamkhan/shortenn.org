@extends('layouts.app')

@section('title', 'Click Limit Reached')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <i class="bi bi-exclamation-triangle display-1 text-danger"></i>
                    <h1 class="mt-4 text-danger">Click Limit Reached</h1>
                    <p class="lead">This short link has reached its maximum number of clicks.</p>
                    <p class="text-muted">The creator set a click limit for this link, and it has now been reached.</p>
                    <a href="{{ route('home') }}" class="btn btn-primary mt-3">Go to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
