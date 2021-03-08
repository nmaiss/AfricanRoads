<style>

body{
    background: url("/images/Prologue.jpg") no-repeat center center;
    background-size: cover;
}

#copyright{
    color: white!important;
}


</style>

@extends('app')

@section('content')

<div id="app">
    <welcome>
    </welcome>
</div>

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>


@endsection
