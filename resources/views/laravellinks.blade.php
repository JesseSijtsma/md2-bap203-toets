@extends('layouts.master')

@section('content')
    @foreach ($links as $link)
        <p>{{ $link->id }}</p>
    @endforeach
@endsection
