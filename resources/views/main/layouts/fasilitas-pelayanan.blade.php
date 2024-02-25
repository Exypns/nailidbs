@extends('main/main')
@section('content')
    

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Rumah Sakit Naili DBS</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans%3A400%2C700%2C800"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700%2C800"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito%3A700"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
  <link rel="stylesheet" href="{{ asset('main-layouts-assets/css/fasilitas-pelayanan.css') }}   "/>
  <script src="#" defer></script>
</head>
<body>

<!-- navigation -->


<!-- Header -->
<div class="pelayanan-wrapper">
  <img src="{{ asset('main-layouts-assets/header-images/1.png') }}" alt="img">
  <div class="pelayanan-wrapper-content">
  <p>PELAYANAN</p>
  </div>
</div>

<!-- jenis pelayanan -->
<div class="pelayanan">
  <div class="pelayanan-container">
    <p class="nama-fasilitas">Pelayanan Unggulan</p>
    <ul>Persalinan Syar'i</ul>
    <ul>Layanan Kedokteran Okupasi</ul>
    <ul>Perinatologi dan NICU</ul>
    <ul>Poliklinik Pada Hari Minggu (Libur)</ul>
  </div>
  <div class="prj">
  <div class="pelayanan-container">
    <p class="nama-fasilitas">Pelayanan Rawat Jalan</p>
    <ul>Spesialis Penyakit Dalam</ul>
      <li>Subspesialis Gastroenterologi-Hepatologi</li>
      <li>Subspesialis Tropik Infeksi</li>
      <li>Subspesialis Hematologi onkologi Medik</li>
    <ul>Spesialis Kebidanan dan Kandungan</ul>
      <li>Subspesialis Fetomaternal</li>
      <li>Subspesialis Uroginekologi Rekonstruksi</li>
    <ul>Spesialis Bedah</ul>
    <ul>Spesialis Bedah Plastik</ul>
    <ul>Spesialis Bedah Anak</ul>
    <ul>Spesialis Orthopedi</ul>
    <ul>Spesialis Anak</ul>
    <ul>Spesialis Paru</ul>
    <ul>Spesialis Mata</ul>
    <ul>Spesialis THT-KL</ul>
    <ul>Spesialis Jantung</ul>
    <ul>Spesialis Saraf</ul>
    <ul>Spesialis Kulit dan Kelamin</ul>
    <ul>Spesialis Rehabilitasi Medik</ul>
    <ul>Spesialis Okupasi</ul>
    <ul>Spesialis Kesehatan Jiwa</ul>
    <ul>Gigi Spesialis Bedah Mulut</ul>
    <ul>Gigi Spesialis Penyakit Mulut</ul>
    <ul>Pelayanan Gigi Umum</ul>
    <ul>Pelayanan Poli Umum</ul>
  </div>
  </div>
  <div class="pelayanan-container">
    <p class="nama-fasilitas">Pelayanan Gawat Darurat</p>
      <ul>IGD 24 Jam</ul>
      <ul>Ambulans</ul>
  </div>
  <div class="pelayanan-container">
    <p class="nama-fasilitas">Pelayanan Rawat Inap</p>
      <ul>Pelayanan Perawatan Umum, Anak, Kebidanan dan Kandungan</ul>
        <li>VIP</li>
        <li>Kelas I</li>
        <li>Kelas II</li>
        <li>Kelas III</li>
        <ul>Perawatan Perinatologi</ul>
        <ul>Perawatan Intensif / ICU</ul>
        <ul>NICU</ul>
  </div>
  <div class="pelayanan-container">
    <p class="nama-fasilitas">Pelayanan Tindakan Medis</p>
      <ul>Kamar Operasi</ul>
      <ul>Kamar Bersalin</ul>
  </div>

        <!-- <div class="pelayanan-container">
          <p class="nama-fasilitas">Pelayanan Penunjang Rawatan</p>
            <ul></ul>
        </div> -->


  <div class="pelayanan-container">
    <p class="nama-fasilitas">Pelayanan Penunjang Diagnostik</p>
    <ul>EKG (Elektrokardiografi)</ul>
    <ul>USG (Ultrasonografi)</ul>
    <ul>C Arm</ul>
    <ul>Rontgen Panoramik</ul>
    <ul>Rontgen Dental</ul>
    <ul>Rontgen Konvensional</ul>
  </div>
  <div class="pelayanan-container">
    <p class="nama-fasilitas">Pelayanan Penunjang Medis</p>
    <ul>Farmasi</ul>
    <ul>Radiologi</ul>
    <ul>Laboratorium</ul>
    <ul>Rekam Medis</ul>
    <ul>Rehabilitasi Medis</ul>
  </div>
  </div>

</div>
@endsection