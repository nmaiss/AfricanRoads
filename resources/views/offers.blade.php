@include('header', ['current_page' => "offers"])

@extends('app')

@section('content')

<div id="app">
    <table-component></table-component>
</div>

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

@include('footer')
@endsection
