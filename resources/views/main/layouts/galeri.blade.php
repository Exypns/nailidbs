@extends('main/main')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>galeri</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans%3A400%2C700"/>
    <link rel="stylesheet" href="{{ asset('main-layouts-assets/css/galeri.css') }}"/>
</head>
<body>
    <!-- navbar -->
    <!-- isi -->
<section>
<div class="pelayanan-wrapper">
  <img src="{{ asset('main-layouts-assets/header-images/1.png') }}" alt="img">
  <div class="pelayanan-wrapper-content">
  <p>GALERI</p>
  </div>
</div>

    <div class="isi-galeri">
        <div class="card-gambar">
            <img src="{{ asset('images/gambargaleri.png') }}" alt="img">
        </div>
        <div class="card-gambar">
        <img src="{{ asset('images/gambargaleri.png') }}" alt="img">
        </div>
        <div class="card-gambar">
        <img src="{{ asset('images/gambargaleri.png') }}" alt="img">
        </div>
        <div class="card-gambar">
        <img src="{{ asset('images/gambargaleri.png') }}" alt="img">
        </div>
        <div class="card-gambar">
        <img src="{{ asset('images/gambargaleri.png') }}" alt="img">
        </div>
        <div class="card-gambar">
        <img src="{{ asset('images/gambargaleri.png') }}" alt="img">
        </div>
    </div>
</section>

    <!-- footer -->
</body>
</html>
@endsection