@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">
                    <i class="bi bi-speedometer2 text-primary"></i> 
                    @if(auth()->user()->role === 'admin')
                        Admin Dashboard - All Links
                    @else
                        My Dashboard
                    @endif
                </h2>
                <div>
                    <a href="{{ route('export') }}" class="btn btn-success">
                        <i class="bi bi-file-earmark-spreadsheet"></i> Export CSV
                    </a>
                    <a href="{{ route('home') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Create New
                    </a>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <!-- Stats Cards -->
            <div class="row g-4 mb-4">
                <div class="col-md-3">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h3 class="mb-0">{{ $links->count() }}</h3>
                            <p class="mb-0">Total Links</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h3 class="mb-0">{{ $links->where('is_active', true)->count() }}</h3>
                            <p class="mb-0">Active Links</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-info text-white">
                        <div class="card-body">
                            <h3 class="mb-0">{{ $links->sum('clicks') }}</h3>
                            <p class="mb-0">Total Clicks</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-warning text-dark">
                        <div class="card-body">
                            <h3 class="mb-0">{{ $links->whereNotNull('expires_at')->where('expires_at', '<', now())->count() }}</h3>
                            <p class="mb-0">Expired Links</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Links Table -->
            <div class="card shadow">
                <div class="card-body">
                    @if($links->isEmpty())
                        <div class="text-center py-5">
                            <i class="bi bi-inbox display-1 text-muted"></i>
                            <h4 class="mt-3">No links yet</h4>
                            <p class="text-muted">Create your first short URL to get started!</p>
                            <a href="{{ route('home') }}" class="btn btn-primary">Create Link</a>
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Short Code</th>
                                        <th>Original URL</th>
                                        <th>Clicks</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Expires</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($links as $link)
                                        <tr>
                                            <td>
                                                <a href="{{ url($link->code) }}" target="_blank" class="text-primary fw-bold">
                                                    {{ $link->code }}
                                                </a>
                                                <button class="btn btn-sm btn-link p-0 ms-1" onclick="copyToClipboard('{{ url($link->code) }}')">
                                                    <i class="bi bi-clipboard"></i>
                                                </button>
                                            </td>
                                            <td class="text-truncate" style="max-width: 300px;">
                                                <a href="{{ $link->url }}" target="_blank" class="text-decoration-none">
                                                    {{ $link->url }}
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge bg-info">{{ $link->clicks }}</span>
                                                @if($link->max_clicks)
                                                    / {{ $link->max_clicks }}
                                                @endif
                                            </td>
                                            <td>
                                                @if(!$link->is_active)
                                                    <span class="badge bg-secondary">Disabled</span>
                                                @elseif($link->expires_at && $link->expires_at < now())
                                                    <span class="badge bg-danger">Expired</span>
                                                @elseif($link->max_clicks && $link->clicks >= $link->max_clicks)
                                                    <span class="badge bg-warning">Limit Reached</span>
                                                @else
                                                    <span class="badge bg-success">Active</span>
                                                @endif
                                            </td>
                                            <td>{{ $link->created_at->format('M d, Y') }}</td>
                                            <td>{{ $link->expires_at ? $link->expires_at->format('M d, Y') : 'Never' }}</td>
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <form action="{{ route('links.toggle', $link) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-{{ $link->is_active ? 'warning' : 'success' }}" title="{{ $link->is_active ? 'Disable' : 'Enable' }}">
                                                            <i class="bi bi-{{ $link->is_active ? 'pause-circle' : 'play-circle' }}"></i>
                                                        </button>
                                                    </form>
                                                    <a href="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data={{ urlencode(url($link->code)) }}" target="_blank" class="btn btn-outline-info" title="QR Code">
                                                        <i class="bi bi-qr-code"></i>
                                                    </a>
                                                    <form action="{{ route('links.destroy', $link) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this link?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger" title="Delete">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        alert('Copied to clipboard: ' + text);
    });
}
</script>
@endpush
@endsection
