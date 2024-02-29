@extends('admin.app')
@section('content')
<div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-warning shadow-primary border-radius-lg pt-4 pb-3" style="display: flex; gap: 10px">
          <h6 class="text-white text-capitalize ps-3">{{ $title }}</h6>
          <a href="/naili-administrator/dokter/tambah-dokter"><span class="badge badge-sm bg-gradient-success">Tambah Data Dokter</span></a>
        </div>
      </div>
      <form action="/naili-administrator/dokter">
        <div class="bg-gradient shadow border-radius-lg pt-4 pb-3" style="display: flex; flex-direction:column; padding:10px; gap:10px">
          <div class="input-group input-group-outline">
          <label class="form-label">Cari Nama Dokter</label>
          <input type="text" class="form-control" name="search-dokter">
        </div>
        <select name="search-dokter" class="bg-gradient shadow border-radius-lg pt-1 pb-1 ">
          <option value="" >Pilih Spesialis</option>
              @foreach ($spesialis as $item)
                  <option value="{{ $item->id }}">{{ $item->nama_spesialis }}</option>
              @endforeach    
          {{-- <option value="1">Bedah</option>
          <option value="2">Mata</option> --}}
          {{-- @foreach ($dokter as $item)
          <option value="{{ $item->spesialis_id }}">{{ $item->spesialis->nama_spesialis }}</option>
          @endforeach --}}
        </select>
        <div class="col-lg-3 col-sm-6 col-12">
          <button class="btn bg-gradient-success w-50 mb-0 toast-btn" type="submit" >Cari</button>
        </div>
      </div>
    </form>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Spesialis</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jadwal</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                <th class="text-secondary opacity-7"></th>
              </tr>
            </thead>
            <tbody>
            @if ($dokter->count())
            @foreach ($dokter as $item)
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                      {{ $loop->iteration }}  
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">{{ $item->nama }}</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <p class="text-xs font-weight-bold mb-0">{{ $item->spesialis->nama_spesialis }}</p>
                </td>
                <td class="align-middle text text-sm">
                  {{-- <p class="text-xs font-weight-bold mb-0">Senin : {{ $item->jadwal->senin }}</p> --}}
                  <p class="text-xs font-weight-bold mb-0">Selasa : {{ $item->selasa }}</p>
                  <p class="text-xs font-weight-bold mb-0">Rabu : {{ $item->rabu }}</p>
                  <p class="text-xs font-weight-bold mb-0">Kamis : {{ $item->kamis }}</p>
                  <p class="text-xs font-weight-bold mb-0">Jumat : {{ $item->jumat }}</p>
                  <p class="text-xs font-weight-bold mb-0">Sabtu : {{ $item->sabtu }}</p>
                  <p class="text-xs font-weight-bold mb-0">Minggu : {{ $item->minggu }}</p>
                </td>
                <td class="align-middle text-center">
                  <a href="/naili-administrator/dokter/{{ $item->id }}/edit"><span class="badge badge-sm bg-gradient-warning">Edit</span></a>
                  <form action="/naili-administrator/dokter/{{ $item->id }}" method="post" style="display: inline">
                    @method('delete')
                    @csrf
                    <button class="btn badge badge-sm bg-gradient-danger" onclick="return confirm('Yakin menghapus dokter?')" >Hapus</button>
                  </form>
                </td>
              </tr>
              @endforeach
              @else 
              <p>Data dokter tidak ditemukan</p>
            @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection