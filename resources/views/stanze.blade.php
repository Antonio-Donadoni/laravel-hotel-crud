@extends('layouts.main-layout')

@section('content')
<main>
    <div class="container">
      <h1>LISTA STANZE</h1>
  <ul>
    @foreach ($stanze as $stanza)
      <a href="{{ route('stanza-show', $stanza -> id) }}">
        <li>{{ $stanza -> room_number}}</li>
      </a>
    @endforeach
  </ul>
    </div>

  <a href="{{ route('stanza-create')}}">AGGIUNGI STANZA</a>


</main>


@endsection
