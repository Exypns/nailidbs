@extends('admin.app')
@section('content')

    <div class="card mt-4">
        <div class="card-header p-3">
            <h5 class="mb-0">Welcome, {{ auth()->user()->username }}</h5>
          </div>
    </div>

@endsection