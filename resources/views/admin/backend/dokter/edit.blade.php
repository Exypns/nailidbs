@extends('admin.app')
@section('content')
<div class="card-body">
    <form action="/edit-dokter/{{ $dokter->id }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
    <div class="modal-body">
        <label class="form-label">Nama Dokter</label>
        <div class="input-group input-group-outline mb-3">
            <input type="text" class="form-control" name="nama" required value="{{ $dokter->id }}">
        </div>
        @error('nama')
            <label class="form-label text-danger">{{ $message }}</label>
        @enderror
        <label class="form-label" for="image">Foto Dokter</label>
        <input type="hidden" name="oldImage" value="{{ $dokter->image }}">
        @if($dokter->image)
            <img src="{{ asset('storage/' . $dokter->image) }}" class="img-preview mb-2" style="width: 30%; display:block">
        @else   
            <img class="img-preview mb-2" style="width: 30%">
        @endif
        <img class="img-preview mb-2" style="width: 30%">
        <div class="input-group input-group-outline mb-3">
            <input type="file" class="form-control" name="image" id="image" onchange="previewImage()">
        </div>
        @error('image')
            <label class="form-label text-danger">{{ $message }}</label>
        @enderror
        <label class="form-label">Spesialis</label>
        <div class="input-group input-group-outline mb-3">
          {{-- <label class="form-label">Spesialis</label> --}}
          <select type="text" class="form-control" name="spesialis_id">
            @foreach ($spesialis as $item)
            <option value="{{ $item->id }}">{{ $item->nama_spesialis }}</option>
            @endforeach
          </select>
        </div>
        <hr>
        <h5>Jadwal</h5>
        <div style="display: flex; align-items:center">
        <label class="form-label" style="margin-right: 15px">Senin</label>
        <div class="input-group input-group-outline mb-2">
            <input type="text" class="form-control" name="senin" value="{{ $dokter->senin }}">
        </div>
      </div>
        <div style="display: flex; align-items:center">
        <label class="form-label" style="margin-right: 10px">Selasa</label>
        <div class="input-group input-group-outline mb-2">
            <input type="text" class="form-control" name="selasa" value="{{ $dokter->selasa }}">
        </div>
      </div>
        <div style="display: flex; align-items:center">
        <label class="form-label" style="margin-right: 10px">Rabu</label>
        <div class="input-group input-group-outline mb-2">
            <input type="text" class="form-control" name="rabu" value="{{ $dokter->rabu }}">
        </div>
      </div>
        <div style="display: flex; align-items:center">
        <label class="form-label" style="margin-right: 10px">Kamis</label>
        <div class="input-group input-group-outline mb-2">
            <input type="text" class="form-control" name="kamis" value="{{ $dokter->kamis }}">
        </div>
      </div>
        <div style="display: flex; align-items:center">
        <label class="form-label" style="margin-right: 10px">Jumat</label>
        <div class="input-group input-group-outline mb-2">
            <input type="text" class="form-control" name="jumat" value="{{ $dokter->jumat }}">
        </div>
      </div>
        <div style="display: flex; align-items:center">
        <label class="form-label" style="margin-right: 10px">Sabtu</label>
        <div class="input-group input-group-outline mb-2">
            <input type="text" class="form-control" name="sabtu" value="{{ $dokter->sabtu }}">
        </div>
      </div>
        <div style="display: flex; align-items:center">
        <label class="form-label" style="margin-right: 10px">Minggu</label>
        <div class="input-group input-group-outline mb-2">
            <input type="text" class="form-control" name="minggu" value="{{ $dokter->minggu }}">
        </div>
      </div>
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