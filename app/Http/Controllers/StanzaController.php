<?php

namespace App\Http\Controllers;

use App\Stanza;
use Illuminate\Http\Request;



class StanzaController extends Controller
{
  public function home() {

    return view('home');
  }
  public function index() {
  $stanze = Stanza::all();

  return view('stanza.stanze', compact('stanze'));
}

public function show($id) {

$stanza = Stanza::findOrFail($id);
return view('stanza.show', compact('stanza'));
}

public function create() {
   return view('stanza.create');

}

public function store(Request $request) {

 $data = $request -> all();
 $stanze = Stanza::create($data);
 return redirect() -> route('stanze-list');
}
}
