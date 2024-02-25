@extends('main/main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Artikel-Berita</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans%3A400%2C700"/>
    <link rel="stylesheet" href="{{ asset('main-layouts-assets/css/artikel-berita.css') }}"/>
</head>
<body>

<div class="pelayanan-wrapper">
  <img src="{{ asset('main-layouts-assets/header-images/7.png') }}" alt="img">
  <div class="pelayanan-wrapper-content">
  <p>BERITA</p>
  </div>
</div>

    <div class="news-container">
        <div class="news-item">
        <img src="{{ asset('images/BERITAkosong.png') }}" alt="img">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button class="read-more">Read More</button>
        </div>

        <div class="news-item">
        <img src="{{ asset('images/BERITAkosong.png') }}" alt="img">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button class="read-more">Read More</button>
        </div>

        <div class="news-item">
        <img src="{{ asset('images/BERITAkosong.png') }}" alt="img">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button class="read-more">Read More</button>
        </div>
    </div>
</body>
</html>
@endsection