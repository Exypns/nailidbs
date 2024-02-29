@extends('main.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel-Kegiatan</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans%3A400%2C700"/>
    <link rel="stylesheet" href="{{ asset('main-layouts-assets/css/kegiatan.css') }}"/>
</head>
<body>

<div class="pelayanan-wrapper">
  <img src="{{ asset('main-layouts-assets/header-images/artikel.png') }}" alt="img">
  <div class="pelayanan-wrapper-content">
  <p>BERITA</p>
  </div>
</div>

    <div class="news-container">
        @foreach ($berita as $item)
        <div class="news-item">
        <img src="{{ asset('storage/' . $item->image) }}" alt="img" style="">
            <p>{{ $item->judul }}</p>
            <button class="read-more"><a href="/berita/{{ $item->judul }}">Read More</a></button>
        </div>
        @endforeach
    </div>
</body>
</html>
@endsection