<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    ShowTweets,
    ShowMessage

};
Route::get('message', ShowMessage::class);
Route::get('tweets', ShowTweets::class);
Route::get('/', function () { return view('home');});
