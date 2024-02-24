@extends('main/main')
@section('content')
<div class="title__page">
    <img src="{{ asset('main-layouts-assets/header-images/1.png') }}" />
    <h5>Jadwal Dokter</h5>
  </div>
  <div class="jadwal-dokter-page">
    <div class="search-bar">
      <form>  
          <input
          placeholder="Cari nama dokter Anda disini (Contoh: Andri)"
          class="search-nama-dokter"
          type="text"
          />
          <div class="filter-dokter">
        <div class="filter-hari">
          <label>Hari</label>
          <select>
              <option value="">Pilih Salah Satu</option>
          </select>
      </div>
      <div class="filter-spesialisasi">
          <label>Spesialisasi</label>
          <select>
              <option value="Pilih Salah Satu">Pilih Salah Satu</option>
          </select>
      </div>
      <div class="submit-button">
          <button type="submit" class="search-button">Cari</button>
      </form>
      </div>
  </div>
    </div>
    <div class="jadwal-dokter-container">
      <div class="jadwal-dokter-card">
        <img src="{{ asset('images/dokter-img.png') }}" />
        <div class="informasi-dokter">
          <div class="detail-dokter">
            <p class="nama-dokter-jadwal">
              dr. Vesri Yoga, MARS, Sp.PD, Subsp.GEH (K), FINASIM
            </p>
            <p class="spesialis-jadwal">Spesiaslis</p>
          </div>
          <div class="jadwal">
            <div class="detail-jadwal">
              <p class="jadwal-hari">Hari</p>
              <p class="jadwal-jam">13:00 - 16:00</p>
            </div>
            <div class="detail-jadwal">
              <p class="jadwal-hari">Hari</p>
              <p class="jadwal-jam">13:00 - 16:00</p>
            </div>
            <div class="detail-jadwal">
              <p class="jadwal-hari">Hari</p>
              <p class="jadwal-jam">13:00 - 16:00</p>
            </div>
            <div class="detail-jadwal">
              <p class="jadwal-hari">Hari</p>
              <p class="jadwal-jam">13:00 - 16:00</p>
            </div>
          </div>
        </div>
      </div>
      <div class="jadwal-dokter-card">
        <img src="/public/Ellipse 2.png" />
        <div class="informasi-dokter">
          <div class="detail-dokter">
            <p class="nama-dokter-jadwal">
              dr. Vesri Yoga, MARS, Sp.PD, Subsp.GEH (K), FINASIM
            </p>
            <p class="spesialis-jadwal">Spesiaslis</p>
          </div>
          <div class="detail-jadwal">
            <p class="jadwal-hari">Hari</p>
            <p class="jadwal-jam">13:00 - 16:00</p>
          </div>
        </div>
      </div>
      <div class="jadwal-dokter-card">
        <img src="/public/Ellipse 2.png" />
        <div class="informasi-dokter">
          <div class="detail-dokter">
            <p class="nama-dokter-jadwal">
              dr. Vesri Yoga, MARS, Sp.PD, Subsp.GEH (K), FINASIM
            </p>
            <p class="spesialis-jadwal">Spesiaslis</p>
          </div>
          <div class="detail-jadwal">
            <p class="jadwal-hari">Hari</p>
            <p class="jadwal-jam">13:00 - 16:00</p>
          </div>
        </div>
      </div>
      <div class="jadwal-dokter-card">
        <img src="/public/Ellipse 2.png" />
        <div class="informasi-dokter">
          <div class="detail-dokter">
            <p class="nama-dokter-jadwal">
              dr. Vesri Yoga, MARS, Sp.PD, Subsp.GEH (K), FINASIM
            </p>
            <p class="spesialis-jadwal">Spesiaslis</p>
          </div>
          <div class="detail-jadwal">
            <p class="jadwal-hari">Hari</p>
            <p class="jadwal-jam">13:00 - 16:00</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection