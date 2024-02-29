@extends('main.main')
@section('content')
<div class="title__page">
    <img src="{{ asset('main-layouts-assets/header-images/dokter.png') }}" />
    <h5>Tenaga Medis</h5>
  </div>
  <!-- LIST DOKTER -->
  <div class="className">
    <div class="dokter-container">
      @foreach ($dokter as $item)          
      <div class="dokter-card">
        <img src="{{ asset('storage/' . $item->image) }}" />
        <p class="nama-dokter">
          {{ $item->nama }}
        </p>
        <p class="spesialis">{{ $item->spesialis->nama_spesialis }}</p>
      </div>
      @endforeach
    </div>
  </div>
  <br /><br /><br /><br /><br /><br />
@endsection