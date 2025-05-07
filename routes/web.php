<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\MessageControoler;
use App\Models\Message;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('about');

Route::get('contact', function () {
    $messages = Message::all();
    return view('contact' ,compact('messages'));
})->name('contact');

Route::post('message', [MessageControoler::class, 'store'])->name('message');
