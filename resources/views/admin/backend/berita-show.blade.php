@extends('main.main')
@section('content')
    <h1>{{ $title }}</h1>
    <h5>{{ $berita->judul }}</h5>
    <br>
    <img src="{{ asset('storage/' . $berita->image) }}" style="max-width: 40%; overflow:hidden" />
    <p>{{ $berita->created_at->diffForHumans() }}</p>
    <p>{!! $berita->body !!}</p>
    
@endsection