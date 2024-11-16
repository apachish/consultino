<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return  response()->json([
        'status' => "SUCCESS",
        'meta' => [
            'code' => 200,
            'message' => url("/"),
        ],
        'data' => [
            "date"=> \Carbon\Carbon::now()
                ->timezone(config('app.timezone'))
                ->toDateTimeString()
        ],
    ], 200, []);
});
