<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;

class PagamentoController extends Controller
{
    public function index() {
      $pagamenti = Pagamento::all();
      return view('pagamento.pagamenti', compact ('pagamenti'));
    }

    public function destroy($id) {
      $pagamento = Pagamento::findOrFail($id);
      $pagamento -> delete();

      return redirect() -> route('pagamenti-list');

    }

    public function edit($id) {
        $pagamento = Pagamento::findOrFail($id);
      return view('pagamento.edit', compact('pagamento'));
    }



    public function update($id, Request $request) {
      $data = $request -> all();
      $pagamento = Pagamento::findOrFail($id);
      $pagamento -> update($data);
      return redirect() -> route('pagamenti-list');

    }
}
