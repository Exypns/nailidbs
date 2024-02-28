@extends('admin.app')
@section('content')
<div class="card-body">
    <form action="/edit-promo/{{ $promo->id }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
    <div class="modal-body">
        <label class="form-label">Title Promo</label>
        <div class="input-group input-group-outline mb-3">
            <input type="text" class="form-control" name="title" required value="{{ $promo->title }}">
        </div>
        @error('title')
            <label class="form-label text-danger">{{ $message }}</label>
        @enderror
        <label class="form-label" for="image">Gambar Header</label>
        <input type="hidden" name="oldImage" value="{{ $promo->image }}">
        @if ($promo->image)    
            <img src="{{ asset('storage/' . $promo->image) }}" class="img-preview mb-2" style="width: 30%; display:block">
        @else
            <img class="img-preview mb-2" style="width: 30%">
        @endif
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