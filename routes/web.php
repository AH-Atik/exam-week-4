<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts/create', [ContactController::class, 'createNewForm']);

Route::get('/contacts', [ContactController::class, 'index'])-> name('contact.get');

Route::get('/contacts/{contact}', [ContactController::class, 'show'])-> name('show.get');

Route::post('/contacts', [ContactController::class, 'createNewContact'])-> name('contact.post');

Route::get('/contacts/{contact}/edit', [ContactController::class, 'update']);

Route::put('/contacts/{contact}', [ContactController::class, 'updateContact'])-> name('contact.put');

Route::delete('/contacts/{contact}', [ContactController::class, 'deleteContact'])-> name('contact.delete');

Route::get('/contacts', [ContactController::class, 'searchData']);