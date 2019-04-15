@extends('admin.layouts.admin')
@section('content')
    @foreach ($blogs as $blog)
        
     Judul : {{ $blog->judul }} <br>
    {{ $blog->content }}

    @endforeach
@endsection