@extends('layouts.main-layout')

@section('content')
<main>
    <div class="container">
      <h1>NUOVA STANZA</h1>
<form action="{{ route('stanza-store') }}" method="post">
  @csrf
  @method('POST')
  <div class="form-group">
      <label for="room_number">NUMERO CAMERA</label>
      <br>
      <input type="text" name="room_number" value="">
  </div>

  <div class="form-group">
      <label for="floor">PIANO</label>
      <br>
      <input type="text" name="floor" value="">
  </div>
  <div class="form-group">
      <label for="beds">LETTI</label>
      <br>
      <input type="text" name="beds" value="">
  </div>
  <br><br>
  <button type="submit">CREA NUOVA STANZA</button>
</form>

    </div>




</main>

@endsection
