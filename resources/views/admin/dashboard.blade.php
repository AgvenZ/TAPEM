@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Dashboard</h1>
    </div>

    <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Statistics Cards -->
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card bg-primary text-white h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-uppercase mb-1">Total Pages</h6>
                                            <h3 class="mb-0">{{ $stats['pages']['total'] }}</h3>
                                            <small>Published: {{ $stats['pages']['published'] }} | Draft: {{ $stats['pages']['draft'] }}</small>
                                        </div>
                                        <i class="fas fa-file-alt fa-2x opacity-75"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-success text-white h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-uppercase mb-1">Total News</h6>
                                            <h3 class="mb-0">{{ $stats['news']['total'] }}</h3>
                                            <small>Published: {{ $stats['news']['published'] }} | Draft: {{ $stats['news']['draft'] }}</small>
                                        </div>
                                        <i class="fas fa-newspaper fa-2x opacity-75"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-warning text-white h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-uppercase mb-1">Total Slideshows</h6>
                                            <h3 class="mb-0">{{ $stats['slideshows']['total'] }}</h3>
                                            <small>Active: {{ $stats['slideshows']['active'] }} | Inactive: {{ $stats['slideshows']['total'] - $stats['slideshows']['active'] }}</small>
                                        </div>
                                        <i class="fas fa-images fa-2x opacity-75"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-info text-white h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-uppercase mb-1">Media Library</h6>
                                            <h3 class="mb-0">{{ $stats['media']['total'] }}</h3>
                                            <small>Uploads: {{ $stats['media']['total'] }}</small>
                                        </div>
                                        <i class="fas fa-photo-video fa-2x opacity-75"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Management Cards -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Manage Pages</h5>
                                    <p class="card-text">Create, edit, and delete pages</p>
                                    <a href="{{ route('admin.pages.index') }}" class="btn btn-primary">Go to Pages</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Manage News</h5>
                                    <p class="card-text">Create, edit, and delete news articles</p>
                                    <a href="{{ route('admin.news.index') }}" class="btn btn-success">Go to News</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Manage Slideshows</h5>
                                    <p class="card-text">Create and manage slideshow images</p>
                                    <a href="{{ route('admin.slideshows.index') }}" class="btn btn-warning">Go to Slideshows</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Media Library</h5>
                                    <p class="card-text">Upload and manage media files</p>
                                    <a href="{{ route('admin.media.index') }}" class="btn btn-info">Go to Media</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.card-body .fas {
    color: rgba(255, 255, 255, 0.8);
}
.bg-warning {
    background-color: #f6c23e !important;
}
</style>
@endpush
