@extends('layouts.main-layout')

@section('content')
<main>
    <div class="container">
      <h1>EDIT PAGAMENTI</h1>
<form action="{{ route('pagamento-update', $pagamento-> id ) }}" method="post">
  @csrf
  @method('POST')
  <div class="form-group">
      <label for="status">STATUS</label>
      <br>
      <input type="text" name="status" value="{{$pagamento -> status}}">
  </div>

  <div class="form-group">
      <label for="price">PREZZO</label>
      <br>
        <input type="number" name="price" value="{{$pagamento -> price}}">
  </div>
  <br><br>
  <button type="submit">MODIFICA PAGAMENTO</button>
</form>

    </div>

</main>

@endsection
