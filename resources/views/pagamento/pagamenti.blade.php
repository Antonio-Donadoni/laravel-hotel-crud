@extends('layouts.main-layout')

@section('content')
<main>
    <div class="container">
      <h1>ELENCO PAGAMENTI</h1>
  <ul>
    @foreach ($pagamenti as $pagamento)

        <li>{{ $pagamento -> status}} {{ $pagamento -> price}}
            <a href="{{ route('pagamento-edit', $pagamento -> id)}}">EDIT</a>
            <a href="{{ route('pagamento-destroy', $pagamento -> id)}}">X</a>
        </li>

    @endforeach
  </ul>
    </div>

</main>


@endsection
