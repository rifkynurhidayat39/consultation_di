@extends('backend.template.index')

@section('content')
<div class="container-fluid">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">FAQ</h3>
            <small class="text-muted">Kelola pertanyaan & jawaban</small>
        </div>

        <a href="{{ route('faq.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Tambah FAQ
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
                            <th width="5%" class="border-end">No</th>
                            <th width="40%" class="border-end">Pertanyaan</th>
                            <th width="35%" class="border-end">Jawaban</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($faqs as $index => $faq)
                            <tr>
                                <td class="text-center fw-semibold border-end">
                                    {{ $index + 1 }}
                                </td>

                                <!-- Pertanyaan -->
                                <td class="border-end">
                                    <strong>{{ $faq->question }}</strong>
                                </td>

                                <!-- Jawaban -->
                                <td class="border-end">
                                    @if($faq->answer)
                                        {{ Str::limit($faq->answer, 80) }}
                                    @else
                                        <span class="text-muted fst-italic">
                                            Belum dijawab
                                        </span>
                                    @endif
                                </td>

                                <!-- Aksi -->
                                <td class="text-center">
                                    <a 
                                        href="{{ route('faq.edit', $faq) }}" 
                                        class="btn btn-outline-warning btn-sm me-1"
                                        title="Edit"
                                    >
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <form 
                                        action="{{ route('faq.destroy', $faq) }}" 
                                        method="POST" 
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin hapus FAQ ini?')"
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
                                <td colspan="4" class="text-center py-4 text-muted">
                                    Belum ada data FAQ
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

<!-- Custom CSS -->
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
