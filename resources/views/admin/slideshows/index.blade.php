@extends('layouts.admin')
@section('title', 'Slideshow')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Manage Slideshows</h2>
        <a href="{{ route('admin.slideshows.create') }}" class="btn btn-primary">Add New Slideshow</a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Order</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($slideshows as $slideshow)
                            <tr>
                                <td>{{ $slideshow->order }}</td>
                                <td>{{ $slideshow->title }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $slideshow->image_path) }}"
                                         alt="{{ $slideshow->title }}"
                                         style="max-height: 50px;">
                                </td>
                                <td>
                                    <span class="badge {{ $slideshow->active ? 'bg-success' : 'bg-danger' }}">
                                        {{ $slideshow->active ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>{{ $slideshow->created_at->format('Y-m-d H:i') }}</td>
                                <td>
                                    <a href="{{ route('admin.slideshows.edit', $slideshow) }}"
                                       class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('admin.slideshows.destroy', $slideshow) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Are you sure you want to delete this slideshow?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No slideshows found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection