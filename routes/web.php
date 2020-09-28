<?php

use Illuminate\Support\Facades\Route;

// ROTTE STANZE

Route::get('/', 'Stanzacontroller@home') -> name('home');

Route::get('/stanze', 'Stanzacontroller@index') -> name('stanze-list');

Route::get('/stanza/{id}', 'Stanzacontroller@show') -> name('stanza-show');

Route::get('/create/stanza', 'StanzaController@create') -> name('stanza-create');

Route::post('/stanze-list', 'StanzaController@store') -> name('stanza-store');


// ROTTE PAGAMENTI

Route::get('/pagamenti', 'Pagamentocontroller@index') -> name('pagamenti-list');

Route::get('/pagamento/destroy/{id}', 'PagamentoController@destroy') -> name('pagamento-destroy');

Route::get('/pagamento/edit/{id}', 'PagamentoController@edit') -> name('pagamento-edit');

route::post('/pagamento/update/{id}', 'PagamentoController@update') -> name('pagamento-update');
