<?php

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/collections', function () {
    $client = new Client();
    $response = $client->request('GET', 'https://api.unsplash.com/search/photos', [
        'query' => [
            'query' => 'laptops',
            'client_id' => env('UNSPLASH_ACCESS_KEY'),
            'per_page' => 30,
            'page' => 1,
        ],
    ]);

    $photos = json_decode($response->getBody()->getContents(), true);

    $filteredPhotos = array_map(function ($photo) {
        return [
            'full_url' => $photo['urls']['full'],
            'description' => $photo['description'],
            'alt_description' => $photo['alt_description']
        ];
    }, $photos['results']);

    return response()->json($filteredPhotos);
});

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/blogdetail', function () {
    return view('blog-details');
})->name('blogdetail');
