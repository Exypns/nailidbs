@extends('admin.app')
@section('content')
<div class="card-body">
    <form action="/tambah-dokter" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="modal-body">
      <input type="hidden" name="id">
      <label class="form-label">Nama Dokter</label>
        <div class="input-group input-group-outline mb-3">
            <input type="text" class="form-control" name="nama" required>
        </div>
          @error('nama')
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
              <input type="text" class="form-control" name="senin" >
          </div>
        </div>
          <div style="display: flex; align-items:center">
          <label class="form-label" style="margin-right: 10px">Selasa</label>
          <div class="input-group input-group-outline mb-2">
              <input type="text" class="form-control" name="selasa" >
          </div>
        </div>
          <div style="display: flex; align-items:center">
          <label class="form-label" style="margin-right: 10px">Rabu</label>
          <div class="input-group input-group-outline mb-2">
              <input type="text" class="form-control" name="rabu" >
          </div>
        </div>
          <div style="display: flex; align-items:center">
          <label class="form-label" style="margin-right: 10px">Kamis</label>
          <div class="input-group input-group-outline mb-2">
              <input type="text" class="form-control" name="kamis" >
          </div>
        </div>
          <div style="display: flex; align-items:center">
          <label class="form-label" style="margin-right: 10px">Jumat</label>
          <div class="input-group input-group-outline mb-2">
              <input type="text" class="form-control" name="jumat" >
          </div>
        </div>
          <div style="display: flex; align-items:center">
          <label class="form-label" style="margin-right: 10px">Sabtu</label>
          <div class="input-group input-group-outline mb-2">
              <input type="text" class="form-control" name="sabtu" >
          </div>
        </div>
          <div style="display: flex; align-items:center">
          <label class="form-label" style="margin-right: 10px">Minggu</label>
          <div class="input-group input-group-outline mb-2">
              <input type="text" class="form-control" name="minggu" >
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
@endsection