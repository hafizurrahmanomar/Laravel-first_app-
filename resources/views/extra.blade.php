{{-- main --}}

@extends('layout.master')
{{-- title --}}
@section('title', 'Home-page')
{{--  body --}}
@section('content')
    <h1>This is Extra Page</h1>

    {{-- @component('componets.alert')
        @slot('alert_title')
            <h2>This is Slot Title</h2>
        @endslot
        @slot('slot_body')
            <p>Lorem ipsum dolor sit amet consectetur</p>
        @endslot
        <h5>Something else</h5>
    @endcomponent --}}

    @alert
    <h2>This is alert with alias create=> See the AppServiceProvider.php</h2>
    @endalert


@endsection





@section('extra')
    @parent
    <p>At First Parant Show</p>
    <p>The alert show by slot used</p>


@endsection
