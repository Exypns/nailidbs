@extends('admin.app')
@section('content')
<div class="card-body">
    <form action="/tambah-fasilitas" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="modal-body">
        <label class="form-label">Nama Fasilitas</label>
        <div class="input-group input-group-outline mb-3">
            <input type="text" class="form-control" name="nama_fasilitas" required>
        </div>
        @error('nama_fasilitas')
            <label class="form-label text-danger">{{ $message }}</label>
        @enderror
        <label class="form-label">Jumlah Fasilitas</label>
        <div class="input-group input-group-outline mb-3">
            <input type="number" class="form-control" name="jumlah" required>
        </div>
        @error('jumlah')
            <label class="form-label text-danger">{{ $message }}</label>
        @enderror
        <label class="form-label" for="image">Gambar Fasilitas</label>
        <img class="img-preview mb-2" style="width: 30%">
        <div class="input-group input-group-outline mb-3">
            <input type="file" class="form-control" name="image" id="image" onchange="previewImage()">
        </div>
        @error('image')
            <label class="form-label text-danger">{{ $message }}</label>
        @enderror
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Tutup
        </button>
        <button type="submit" class="btn btn-success" >
            Simpan Data
        </button>
    </div>
    </form>
</div>
<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault()
    })

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection