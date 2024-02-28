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
  <link rel="stylesheet" href="{{ asset('main-layouts-assets/css/fasilitas.css') }}"/>
  <script src="#" defer></script>
</head>
<body>

<!-- navigation -->


<!-- Header -->
<div class="fasilitas-wrapper">
  <div class="fasilitas-wrapper-img">
  <img src="{{ asset('main-layouts-assets/header-images/6.png') }}" alt="img">
  </div>
  <div class="fasilitas-wrapper-content">
  <p>FASILITAS</p>
  </div>
</div>

<!-- gambar fasilitas -->
<div class="fasilitas">
  <div class="fasilitas-container">
    <div class="fasilitas-img">
      <img src="{{ asset('images/BERITAkosong.png') }}" alt="img">
    </div>
    <div class="fasilitas-content">
    <p class="nama-fasilitas">Kamar VIP</p>
    <p class="jumlah-fasilitas">Jumlah : 3</p>
  </div>
</div>
  <div class="fasilitas-container">
    <div class="fasilitas-img">
      <img src="{{ asset('images/BERITAkosong.png') }}" alt="img">
    </div>
    <div class="fasilitas-content">
    <p class="nama-fasilitas">Kamar Kelas I</p>
    <p class="jumlah-fasilitas">Jumlah : 8</p>
    </div>
  </div>
  <div class="fasilitas-container">
    <div class="fasilitas-img">
      <img src="{{ asset('images/BERITAkosong.png') }}" alt="img">
    </div>
    <div class="fasilitas-content">
    <p class="nama-fasilitas">Kamar Kelas II</p>
    <p class="jumlah-fasilitas">Jumlah : 18</p>
    </div>
  </div>
  <div class="fasilitas-container">
    <div class="fasilitas-img">
      <img src="{{ asset('images/BERITAkosong.png') }}" alt="img">
    </div>
    <div class="fasilitas-content">
    <p class="nama-fasilitas">Kamar Kelas III</p>
    <p class="jumlah-fasilitas">Jumlah : 12</p>
    </div>
  </div>
  <div class="fasilitas-container">
    <div class="fasilitas-img">
      <img src="{{ asset('images/BERITAkosong.png') }}" alt="img">
    </div>
    <div class="fasilitas-content">
    <p class="nama-fasilitas">ICU</p>
    <p class="jumlah-fasilitas">Jumlah : 3</p>
    </div>
  </div>
  <div class="fasilitas-container">
    <div class="fasilitas-img">
      <img src="{{ asset('images/BERITAkosong.png') }}" alt="img">
    </div>
    <div class="fasilitas-content">
    <p class="nama-fasilitas">NICU</p>
    <p class="jumlah-fasilitas">Jumlah : 3</p>
    </div>
  </div>
</div>

@endsection