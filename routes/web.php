<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Stanzacontroller@index') -> name('index');

Route::get('/stanza/{id}', 'Stanzacontroller@show') -> name('stanza-show');

Route::get('/create/stanza', 'StanzaController@create') -> name('stanza-create');

Route::post('/', 'StanzaController@store') -> name('stanza-store');
