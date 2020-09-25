@extends('layouts.main-layout')

@section('content')
<main>
    <div class="container">
      <h1>SPECIFICHE STANZA {{$stanza -> room_number}}</h1>

    <p>PIANO: {{$stanza -> floor}}</p>
    <p>NUMERO LETTI: {{$stanza -> beds}}</p>

    </div>

    <a href="{{route('index')}}">TORNA ALLA LISTA</a>


</main>

@endsection
