@extends('layouts.landing')

@section('title', 'Services')

@section('content')
    <h1>Services</h1>
    <div class="cards">
        @component('_components.card')
            @slot('title', 'Service 1')
            @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, quidem!')
        @endcomponent
        @component('_components.card')
            @slot('title', 'Service 2')
            @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, quidem!')
        @endcomponent
    </div>
@endsection
