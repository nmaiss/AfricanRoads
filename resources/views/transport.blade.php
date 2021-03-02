@extends('app')

@section('content')

<div id="app">
    <transport-form-component type='{{$type}}'>
    </transport-form-component>
</div>

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

@endsection
