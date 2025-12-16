@extends('backend.template.index')

@section('content')
<div class="container-fluid">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">News</h3>
            <small class="text-muted">Kelola data berita website</small>
        </div>

        <a href="{{ route('news.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Tambah News
        </a>
    </div>

    <!-- Alert -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Card -->
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped align-middle mb-0">

                    <thead class="table-light">
                        <tr class="text-center text-uppercase small fw-semibold">
                            <th width="4%">No</th>
                            <th width="10%">Thumbnail</th>
                            <th width="28%">Judul</th>
                            <th width="12%">Kategori</th>
                            <th width="10%">Author</th>
                            <th width="6%">Views</th>
                            <th width="10%">Status</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($news as $index => $item)
                            <tr>
                                <!-- No -->
                                <td class="text-center fw-semibold">
                                    {{ $index + 1 }}
                                </td>

                                <!-- Thumbnail -->
                                <td class="text-center">
                                    @if($item->thumbnail)
                                        <img 
                                            src="{{ asset('storage/'.$item->thumbnail) }}"
                                            class="img-thumbnail shadow-sm"
                                            style="width:60px; height:auto;"
                                        >
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>

                                <!-- Judul -->
                                <td>
                                    <strong>{{ $item->title }}</strong>
                                    <div class="small text-muted">
                                        {{ $item->published_at ?? '-' }}
                                    </div>
                                </td>

                                <!-- Kategori -->
                                <td class="text-center">
                                    {{ $item->category ?? '-' }}
                                </td>

                                <!-- Author -->
                                <td class="text-center">
                                    {{ $item->author ?? '-' }}
                                </td>

                                <!-- Views -->
                                <td class="text-center">
                                    <span class="badge bg-info">
                                        {{ $item->views }}
                                    </span>
                                </td>

                                <!-- Status -->
                                <td class="text-center">
                                    @if($item->status === 'published')
                                        <span class="badge bg-success">Published</span>
                                    @else
                                        <span class="badge bg-secondary">Draft</span>
                                    @endif
                                </td>

                                <!-- Aksi -->
                                <td class="text-center">
                                    <a 
                                        href="{{ route('news.edit', $item->id) }}" 
                                        class="btn btn-outline-warning btn-sm me-1"
                                        title="Edit"
                                    >
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <form 
                                        action="{{ route('news.destroy', $item->id) }}" 
                                        method="POST" 
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin hapus news ini?')"
                                    >
                                        @csrf
                                        @method('DELETE')
                                        <button 
                                            class="btn btn-outline-danger btn-sm"
                                            title="Hapus"
                                        >
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center py-4 text-muted">
                                    Belum ada data news
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

<style>
.table-striped > tbody > tr:nth-of-type(odd) {
    background-color: #f8f9fa;
}
.table-striped > tbody > tr:nth-of-type(even) {
    background-color: #ffffff;
}
.table-hover tbody tr:hover {
    background-color: #eef2f6;
}
</style>
@endsection
