@extends('backend.template.index')

@section('content')
<div class="container-fluid">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">Vision & Mission</h3>
            <small class="text-muted">Manage Vision & Mission content</small>
        </div>
    </div>

    <!-- Alert Success -->
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
                            <th width="40%">Vision</th>
                            <th width="40%">Mission</th>
                            <th width="20%">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($visionMission as $item)
                            <tr>
                                <td>
                                    <div class="text-wrap">
                                        {{ $item->vision }}
                                    </div>
                                </td>

                                <td>
                                    <div class="text-wrap">
                                        {{ $item->mission }}
                                    </div>
                                </td>

                                <td class="text-center">
                                    <a 
                                        href="{{ route('vision-mission.edit', $item->id) }}"
                                        class="btn btn-outline-warning btn-sm"
                                        title="Edit Vision & Mission"
                                    >
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center py-4 text-muted">
                                    Belum ada data Vision & Mission
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

.table-hover tbody tr:hover {
    background-color: #eef2f6;
}

.text-wrap {
    white-space: normal;
    word-break: break-word;
}
</style>
@endsection
