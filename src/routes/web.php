<?php

use Illuminate\Support\Facades\Route;

Route::get('/subscribe', function(){
    return view('VisitorSubscription::subscribe');
});
