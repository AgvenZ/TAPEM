@extends('layouts.admin')
@section('title', 'Manage News')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Manage News</h1>
        <a href="{{ route('admin.news.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Create News Article
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($news as $article)
                            <tr>
                                <td>{{ ($news->currentPage() - 1) * $news->perPage() + $loop->iteration }}</td>
                                <td>{{ $article->title }}</td>
                                <td>
                                    @if($article->image_path)
                                        <img src="{{ Storage::url($article->image_path) }}" alt="{{ $article->title }}" class="img-thumbnail" style="max-width: 100px;">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    @if($article->is_published)
                                        <span class="badge bg-success">Published</span>
                                    @else
                                        <span class="badge bg-warning">Draft</span>
                                    @endif
                                </td>
                                <td>{{ $article->created_at->format('Y-m-d H:i') }}</td>
                                <td>{{ $article->updated_at->format('Y-m-d H:i') }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('admin.news.show', $article) }}" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.news.edit', $article) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.news.destroy', $article) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this news?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No news articles found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                {{ $news->links('pagination::bootstrap-4')->withQueryString(1) }}
            </div>
        </div>
    </div>
@endsection