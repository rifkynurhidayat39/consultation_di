@extends('backend.template.index')

@section('content')
<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h3 class="fw-bold mb-0">Sambutan</h3>
            <small class="text-muted">
                Konten sambutan di halaman utama
            </small>
        </div>

        <a href="{{ route('sambutan.edit') }}" class="btn btn-primary">
            <i class="bi bi-pencil-square me-1"></i> Edit Sambutan
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped align-middle mb-0">

                    <thead class="table-light">
                        <tr class="text-center text-uppercase small fw-semibold">
                            <th width="25%">Judul</th>
                            <th>Deskripsi</th>
                            <th width="15%">Foto</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="text-center">
                                @if($sambutan->image)
                                    <img 
                                        src="{{ asset('storage/'.$sambutan->image) }}"
                                        style="width:50px"
                                        class="img-thumbnail"
                                    >
                                @else
                                    <span class="text-muted small">Belum ada</span>
                                @endif
                            </td>

                            <td class="fw-semibold">
                                {{ $sambutan->title }}
                            </td>

                            <td>
                                {{ $sambutan->description }}
                            </td>

                            <td class="text-center">
                                <a href="{{ route('sambutan.edit') }}"
                                   class="btn btn-outline-warning btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>
@endsection
