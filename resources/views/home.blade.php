@extends('layouts.main-layout')

@section('content')
<main>
    <div class="container">
        <a href="{{ route('stanze-list')}}">ELENCO STANZE</a>
          <br><br><br>
        <a href="{{ route('pagamenti-list')}}">ELENCO PAGAMENTI</a>
    </div>




</main>


@endsection
