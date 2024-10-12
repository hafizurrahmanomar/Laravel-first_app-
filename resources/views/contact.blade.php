{{-- main --}}

@extends('layout.master')
{{-- title --}}

@section('title', 'contact-page')

{{-- Internal css  --}}
@section('style')
    <style>
        /* Add your CSS styles here */
        body {
            background-color: azure;
        }
    </style>


@endsection



{{--  body --}}
@section('content')
    <h1>This is Contact Page</h1>
    @include('partials.contactform')
@endsection
