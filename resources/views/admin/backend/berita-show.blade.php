@extends('main.main')
@section('content')
    <h1>{{ $title }}</h1>
    <h5>{{ $berita->judul }}</h5>
    <p>{{ $berita->created_at->diffForHumans() }}</p>
    <p>{!! $berita->body !!}</p>
@endsection