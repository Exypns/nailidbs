@extends('admin/app')
@section('content')
<div class="col-12">
  
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-warning shadow-primary border-radius-lg pt-4 pb-3" style="display: flex; gap: 10px">
          <h6 class="text-white text-capitalize ps-3">{{ $title }}</h6>
          <a href="/naili-administrator/fasilitas/tambah-fasilitas"><span class="badge badge-sm bg-gradient-success">Tambah fasilitas</span></a>
        </div>
      </div>
      <form action="/naili-administrator/fasilitas">
        <div class="bg-gradient shadow border-radius-lg pt-4 pb-3" style="display: flex; flex-direction:column; padding:10px; gap:10px">
          <div class="input-group input-group-outline">
          <label class="form-label">Cari fasilitas</label>
          <input type="text" class="form-control" name="search-fasilitas">
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <button class="btn bg-gradient-success w-50 mb-0 toast-btn" type="submit" >Cari</button>
        </div>
      </div>
    </form>
    @if (session()->has('success')) 
    <br>
    <div class="alert alert-success alert-dismissible text-white mx-3" role="alert">
      <span class="text-sm">{{ session('success') }}</span>
      <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Fasilitas</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                <th class="text-secondary opacity-7"></th>
              </tr>
            </thead>
            <tbody>
             @foreach ($fasilitas as $item)
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                      {{ $loop->iteration }}  
                  </div>
                </td>
                <td>
                  <a class="text-xs font-weight-bold mb-0" href="/naili-administrator/fasilitas/{{ $item->judul }}">{{ $item->nama_fasilitas }}</a>
                </td>
                <td class="align-middle text-center text-sm">
                  <p class="text-xs font-weight-bold mb-0">{{ $item->jumlah }}</p>
                </td>
                <td class="align-middle text-center">
                  <a href="/naili-administrator/fasilitas/{{ $item->id }}/edit"><span class="badge badge-sm bg-gradient-warning">Edit</span></a>
                  <form action="/naili-administrator/fasilitas/{{ $item->id }}" method="post" style="display: inline">
                    @method('delete')
                    @csrf
                    <button class="btn badge badge-sm bg-gradient-danger" onclick="return confirm('Yakin menghapus fasilitas?')" >Hapus</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection