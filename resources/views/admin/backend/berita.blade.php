@extends('admin/app')
@section('content')
<div class="col-12">
  
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-warning shadow-primary border-radius-lg pt-4 pb-3" style="display: flex; gap: 10px">
          <h6 class="text-white text-capitalize ps-3">{{ $title }}</h6>
          <a href="/tambah-dokter"><span class="badge badge-sm bg-gradient-success">Tambah Data Dokter</span></a>
        </div>
      </div>
      <form action="/naili-administrator/dokter">
        <div class="bg-gradient shadow border-radius-lg pt-4 pb-3" style="display: flex; flex-direction:column; padding:10px; gap:10px">
          <div class="input-group input-group-outline">
          <label class="form-label">Cari Berita</label>
          <input type="text" class="form-control" name="search-dokter">
        </div>
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
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Publish</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                <th class="text-secondary opacity-7"></th>
              </tr>
            </thead>
            <tbody>
             @foreach ($berita as $item)
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                      {{ $loop->iteration }}  
                  </div>
                </td>
                <td>
                  <a class="text-xs font-weight-bold mb-0" href="/naili-administrator/berita/{{ $item->judul }}">{{ $item->judul }}</a>
                </td>
                <td class="align-middle text-center text-sm">
                  <p class="text-xs font-weight-bold mb-0">{{ $item->published_at }}</p>
                </td>
                <td class="align-middle text-center">
                  <a href="/edit-dokter"><span class="badge badge-sm bg-gradient-warning">Edit</span></a>
                  <a href="/edit-dokter"><span class="badge badge-sm bg-gradient-danger">Hapus</span></a>
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