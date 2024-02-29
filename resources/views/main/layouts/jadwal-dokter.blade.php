@extends('main/main')
@section('content')
<div class="title__page">
    <img src="{{ asset('main-layouts-assets/header-images/dokter.png') }}" />
    <h5>Jadwal Dokter</h5>
  </div>
  <div class="jadwal-dokter-page">
    <div class="search-bar">
      <form action="/jadwal-dokter">  
          <input
          placeholder="Cari nama dokter Anda disini (Contoh: Andri)"
          class="search-nama-dokter"
          type="text" 
          name="search-dokter"
          />
          <div class="filter-dokter">
      <div class="filter-spesialisasi">
          <label>Spesialisasi</label>
          <select name="search-spesialis">
              <option value="Pilih Salah Satu">Pilih Salah Satu</option>
              @foreach ($spesialis as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_spesialis }}</option>
              @endforeach
          </select>
      </div>
      <div class="submit-button">
          <button type="submit" class="search-button">Cari</button>
      </form>
      </div>
  </div>
    </div>
    <div class="jadwal-dokter-container">
      @if ($dokter->count())
          

      @foreach ($dokter as $item)
      <div class="jadwal-dokter-card">
        <img src="{{ asset('storage/' . $item->image) }}" style="width: 180px; height:180px; border-radius:100%"/>
        <div class="informasi-dokter">
          <div class="detail-dokter">
            <p class="nama-dokter-jadwal">
              {{ $item->nama }}
            </p>
            <p class="spesialis-jadwal">{{ $item->spesialis->nama_spesialis }}</p>
          </div>
          <div class="jadwal">
            <div class="detail-jadwal">
              {!! $item->senin !== null ? "<p class='jadwal-hari'>Senin </p>"  : ''!!}
              <p class="jadwal-jam">{{ $item->senin }}</p>
            </div>
            <div class="detail-jadwal">
              {!! $item->selasa !== null ? "<p class='jadwal-hari'>Selasa </p>"  : ''!!}
              <p class="jadwal-jam">{{ $item->selasa }}</p>
            </div>
            <div class="detail-jadwal">
              {!! $item->rabu !== null ? "<p class='jadwal-hari'>Rabu </p>"  : ''!!}
              <p class="jadwal-jam">{{ $item->rabu }}</p>
            </div>
            <div class="detail-jadwal">
              {!! $item->kamis !== null ? "<p class='jadwal-hari'>Kamis </p>"  : ''!!}
              <p class="jadwal-jam">{{ $item->kamis }}</p>
            </div>
            <div class="detail-jadwal">
              {!! $item->jumat !== null ? "<p class='jadwal-hari'>Jumat </p>"  : ''!!}
              <p class="jadwal-jam">{{ $item->jumat }}</p>
            </div>
            <div class="detail-jadwal">
              {!! $item->sabtu !== null ? "<p class='jadwal-hari'>Sabtu </p>"  : ''!!}
              <p class="jadwal-jam">{{ $item->sabtu }}</p>
            </div>
            <div class="detail-jadwal">              {!! $item->minggu !== null ? "<p class='jadwal-hari'>Minggu </p>"  : ''!!}
              <p class="jadwal-jam">{{ $item->minggu }}</p>
            </div>
          </div>
        </div>
      </div>          
      @endforeach
      @else
      <p> Data Dokter Tidak Ditemukan </p>
    @endif

    </div>
  </div>
@endsection