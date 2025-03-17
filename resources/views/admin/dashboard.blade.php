@extends('layouts.admin')
@section('title', 'Admin Dashboard')

@section('content')
    <div class="container-fluid">
        <h1 class="mb-4">Admin Dashboard</h1>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pages Management</h5>
                        <p class="card-text">Manage your website's static pages here.</p>
                        <a href="{{ route('admin.pages.index') }}" class="btn btn-primary">
                            <i class="fas fa-file-alt"></i> Manage Pages
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">News Management</h5>
                        <p class="card-text">Manage your news articles and updates here.</p>
                        <a href="{{ route('admin.news.index') }}" class="btn btn-primary">
                            <i class="fas fa-newspaper"></i> Manage News
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection