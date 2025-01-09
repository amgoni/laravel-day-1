<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ninas', function () {
    $ninas = [
        ["name" => "Mario", "skill" => 75, "id" => "1"],
        ["name" => "Luigi", "skill" => 45, "id" => "2"],
        
    ];
    
    return view('ninas.index', ["greeting" => "Hello", "ninas" => $ninas]);
});

Route::get('/ninas/create', function () {
    return view('ninas.create');
});

Route::get('/ninas/{id}', function ($id) {
    return view('ninas.show', ["id" => $id]);
});