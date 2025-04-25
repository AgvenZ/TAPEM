@extends('layouts.admin')
@section('title', 'Manage Pages')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Manage Navbar Pages</h1>
        <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Create New Page
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
                            <th>Parent Menu</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pages as $page)
                            <tr>
                                <td>{{ ($pages->currentPage() - 1) * $pages->perPage() + $loop->iteration }}</td>
                                <td>
                                    @if($page->parent_page)
                                        <span class="ms-3">└─</span>
                                    @endif
                                    @php
                                        // Menghilangkan format tanggal dari judul
                                        $title = preg_replace('/^\d{4}-\d{2}-\d{2}\s*\|\s*/', '', $page->title);
                                    @endphp
                                    {{ $title }}
                                    @if(\App\Models\Page::where('parent_page', $page->title)->exists())
                                        <span class="badge bg-info">Dropdown</span>
                                    @endif
                                </td>
                                <td>{{ $page->parent_page ?: '-' }}</td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('admin.pages.move', ['page' => $page->id, 'direction' => 'up']) }}" method="POST" class="d-inline">
                                            @csrf
                                            @php
                                                // Get all pages with the same parent to determine if this is the first overall
                                                $allPagesWithSameParent = \App\Models\Page::where('parent_page', $page->parent_page)
                                                    ->orderBy('order', 'asc')
                                                    ->orderBy('id', 'asc')
                                                    ->get();

                                                // Find the current page's position in the overall list
                                                $currentPosition = $allPagesWithSameParent->search(function($item) use ($page) {
                                                    return $item->id === $page->id;
                                                });

                                                // Check if we're at the first position overall
                                                $isFirstOverall = $currentPosition === 0;
                                            @endphp
                                            <button type="submit" class="btn btn-sm btn-outline-secondary" {{ $isFirstOverall ? 'disabled' : '' }}>
                                                <i class="fas fa-arrow-up"></i>
                                            </button>
                                        </form>
                                        <form action="{{ route('admin.pages.move', ['page' => $page->id, 'direction' => 'down']) }}" method="POST" class="d-inline">
                                            @csrf
                                            @php
                                                // Check if we're at the last position overall
                                                $isLastOverall = $currentPosition === ($allPagesWithSameParent->count() - 1);
                                            @endphp
                                            <button type="submit" class="btn btn-sm btn-outline-secondary" {{ $isLastOverall ? 'disabled' : '' }}>
                                                <i class="fas fa-arrow-down"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td>
                                    @if($page->is_published)
                                        <span class="badge bg-success">Published</span>
                                    @else
                                        <span class="badge bg-warning">Draft</span>
                                    @endif
                                </td>
                                <td>{{ $page->created_at->format('Y-m-d H:i') }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('pages.show', $page->slug) }}" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.pages.edit', $page->slug) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.pages.destroy', $page->slug) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No pages found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                {{ $pages->links('pagination::bootstrap-4')->withQueryString(1) }}
            </div>
        </div>
    </div>
@endsection
