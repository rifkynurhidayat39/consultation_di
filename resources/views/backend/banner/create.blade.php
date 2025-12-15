<form method="POST" action="{{ route('banner.store') }}" enctype="multipart/form-data">
  @csrf

  <label>Teks Banner</label>
  <textarea name="text"></textarea>

  <label>Gambar</label>
  <input type="file" name="image" required>

  <button>Simpan</button>
</form>
