@extends('main.main')
@section('content')
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
<section>
    <div class="header">
        <!-- <img src="gambar/headergaleri.png" alt=""> -->
        <h3>GALERI</h3>
    </div>

    <div class="isi-galeri">
        <div class="card-gambar">
            <img src="gambar/gambargaleri.png" alt="">
        </div>
        <div class="card-gambar">
            <img src="gambar/gambargaleri.png" alt="">
        </div>
        <div class="card-gambar">
            <img src="gambar/gambargaleri.png" alt="">
        </div>
        <div class="card-gambar">
            <img src="gambar/gambargaleri.png" alt="">
        </div>
        <div class="card-gambar">
            <img src="gambar/gambargaleri.png" alt="">
        </div>
        <div class="card-gambar">
            <img src="gambar/gambargaleri.png" alt="">
        </div>
    </div>
</section>
</body>
@endsection