@extends('main.main')
@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('main-layouts-assets/css/galeri.css') }}" />
</head>
<div class="title__page">
    <img src="{{ asset('main-layouts-assets/header-images/dokter.png') }}" />
    <h5>Galeri</h5>
  </div>
  <div class="container-galeri">
      @foreach ($galeri as $item)
        {{-- <div>  --}}
            <img src="{{ asset('storage/' . $item->image) }}" />
        {{-- </div> --}}
        @endforeach
  </div>
</body>
@endsection