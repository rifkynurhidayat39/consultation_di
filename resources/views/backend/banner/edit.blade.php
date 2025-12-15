@extends('backend.layout')

@section('content')
<form method="POST" action="{{ route('banners.update', $banner) }}" enctype="multipart/form-data">
  @csrf @method('PUT')

  <label>Teks Banner</label>
  <textarea name="text">{{ $banner->text }}</textarea>

  <img src="{{ asset('storage/'.$banner->image) }}" width="200">

  <label>Gambar Baru (opsional)</label>
  <input type="file" name="image">

  <button>Update</button>
</form>
@endsection
