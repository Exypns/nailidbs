@extends('main/main')
@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Isi-Berita</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans%3A400%2C700"/>
        <link rel="stylesheet" href="{{ asset('main-layouts-assets/css/berita-show.css') }}"/>
    </head>
<body>
    <section>
        <div class="header-isi-berita">
        <img src="{{ asset('main-layouts-assets/header-images/5.png') }}" alt="img">
            <div class="isi-wrapper-content">
            <h3>BERITA</h3>
            </div>
        </div>
        <div class="judul-berita">
        <img src="{{ asset('storage/' . $berita->image) }}" alt="img">
            <h2>{{ $berita->judul }}</h2>
        <div class="pembungkusdata">
            <div class="databerita">
            <img src="{{ asset('icons/calender.png') }}" alt="img" class="icon">
                <p class="icon">{{ $berita->created_at }}</p> 
            </div> 
        </div>
        </div>
        <div class="isi-berita">
            <p>
                {!! $berita->body !!}
            </p>
        </div>
    </section>
</body>
@endsection