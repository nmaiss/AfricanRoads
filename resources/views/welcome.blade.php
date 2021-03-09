<style>

body{
    background: url("/images/Prologue.jpg") no-repeat center center;
    background-size: cover;
}

#copyright{
    color: white!important;
}

.animation{
  height:0px;
  width:1px;
  border-bottom:1px solid white!important;

  -webkit-animation: increase 3s;
  -moz-animation:    increase 3s;
  -o-animation:      increase 3s;
  animation:         increase 3s infinite;
  animation-fill-mode: forwards;
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
