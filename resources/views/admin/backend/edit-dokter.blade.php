@extends('app')
@section('content')
    
<div class="card-body">
    {{-- <form role="form" class="text-start" action="/tambahdokter" method="POST"  enctype="multipart/form-data">
        @csrf
      <div class="input-group input-group-outline my-3">
        <label class="form-label">Nama Dokter</label>
        <input type="text" class="form-control" name="nama">
      </div>
      <div class="input-group input-group-outline mb-3">
        <label class="form-label">Spesialis</label>
        <input type="text" class="form-control" name="spesialis">
      </div>
      <div class="text-center" style="display: flex; gap: 20px; justify-content:center;">
        <button type="submit" class="btn bg-gradient-danger w-100 my-4 mb-2">Batal</button>
        <button type="button" class="btn bg-gradient-success w-100 my-4 mb-2">Simpan</button>
      </div>
    </form> --}}
    {{-- <form action="/edit-dokter/{{$dokter->id}}" method="post" enctype="multipart/form-data">
        @csrf --}}
    <div class="modal-body">
        <div class="input-group input-group-outline my-3">
            <label class="form-label">Nama Dokter</label>
            <input type="text" class="form-control" name="nama" value="{{ $dokter->nama }}">
          </div>
          <div class="input-group input-group-outline mb-3">
            <label class="form-label">Spesialis</label>
            <input type="text" class="form-control" name="spesialis" value="{{ $dokter->spesialis }}">
          </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Tutup
        </button>
        <button type="submit" class="btn btn-primary" >
            Simpan Data
        </button>
    </div>
    {{-- </form> --}}
</div>
@endsection