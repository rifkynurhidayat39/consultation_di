@extends('backend.template.index')

@section('content')
<h2>Data Banner</h2>

<a href="{{ route('banner.create') }}">Tambah Banner</a>

@foreach ($banners as $banner)
  <div>
    <img src="{{ asset('storage/'.$banner->image) }}" width="200">
    <p>{{ $banner->text }}</p>

    <a href="{{ route('banner.edit', $banner) }}">Edit</a>

    <form method="POST" action="{{ route('banner.destroy', $banner) }}">
      @csrf
      @method('DELETE')
      <button>Hapus</button>
    </form>
  </div>
@endforeach
@endsection
