{{-- main --}}

@extends('layout.master')
{{-- title --}}
@section('title', 'about-page')
{{--  body --}}
@section('content')
    <h1>This is About Page</h1>
    @include('partials.contactform')
@endsection
