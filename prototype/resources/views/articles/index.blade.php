@extends('layouts.app')

@section('content')
<div class="container">

    {{-- Success message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2 class="mb-4">Articles</h2>

    {{-- Filter --}}
    <form method="GET" action="{{ route('articles.index') }}" class="mb-3">
        <select name="category" onchange="this.form.submit()" class="form-select w-25">
            <option value="">All categories</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ $selectedCategory == $cat->id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>
    </form>

    {{-- Articles table --}}
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Categories</th>
                <th>Status</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>
                        @foreach($article->categories as $cat)
                            <span class="badge bg-secondary">{{ $cat->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        <span class="badge {{ $article->status == 'published' ? 'bg-success' : 'bg-warning' }}">
                            {{ $article->status }}
                        </span>
                    </td>
                    <td>{{ $article->created_at->format('Y-m-d') }}</td>

                    <td>
                        <form action="{{ route('articles.destroy', $article->id) }}"
                              method="POST"
                              onsubmit="return confirm('Are you sure you want to delete this article?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6">No articles found</td></tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination --}}
    <div>
        {{ $articles->links() }}
    </div>

</div>
@endsection
