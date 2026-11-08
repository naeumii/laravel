<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/products', function () {
    return response()->json([
        'data' => [
            ['id' => 1, 'name' => 'Notebook', 'price' => 50],
            ['id' => 2, 'name' => 'Ballpen', 'price' => 15],
        ],
    ]);
});

Route::post('/products', function (Request $request) {
    $data = $request->validate([
        'name' => ['required', 'string', 'max:100'],
        'price' => ['required', 'numeric', 'min:0']
    ]);

    return response()->json([
        'message' => 'Demo request received',
        'data' => $data
    ]);
});