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
                        <div class="col-md-4">
                            <div class="card bg-primary text-white h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-uppercase mb-1">Total Pages</h6>
                                            <h3 class="mb-0">{{ \App\Models\Page::count() }}</h3>
                                            <small>Published: {{ \App\Models\Page::where('is_published', true)->count() }}</small>
                                        </div>
                                        <i class="fas fa-file-alt fa-2x opacity-75"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-success text-white h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-uppercase mb-1">Total News</h6>
                                            <h3 class="mb-0">{{ \App\Models\News::count() }}</h3>
                                            <small>Published: {{ \App\Models\News::where('is_published', true)->count() }}</small>
                                        </div>
                                        <i class="fas fa-newspaper fa-2x opacity-75"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-warning text-white h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-uppercase mb-1">Total Drafts</h6>
                                            <h3 class="mb-0">{{ \App\Models\News::where('is_published', false)->count() + \App\Models\Page::where('is_published', false)->count() }}</h3>
                                            <small>News: {{ \App\Models\News::where('is_published', false)->count() }} | Pages: {{ \App\Models\Page::where('is_published', false)->count() }}</small>
                                        </div>
                                        <i class="fas fa-edit fa-2x opacity-75"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Management Cards -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Manage Pages</h5>
                                    <p class="card-text">Create, edit, and delete pages</p>
                                    <a href="{{ route('admin.pages.index') }}" class="btn btn-primary">Go to Pages</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Manage News</h5>
                                    <p class="card-text">Create, edit, and delete news articles</p>
                                    <a href="{{ route('admin.news.index') }}" class="btn btn-primary">Go to News</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <h5 class="card-title">View Website</h5>
                                    <p class="card-text">Go to the public-facing website</p>
                                    <a href="/" class="btn btn-secondary">Visit Website</a>
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