<meta name="viewport" content="width=1024">


@include('header', ['current_page' => "offers"])

@extends('app')

@section('content')

<div id="app">
    <table-component class="mb-6"></table-component>
</div>

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

@endsection
