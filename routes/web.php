<?php

use App\Http\Controllers\LaptopController;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::resource('laptop', LaptopController::class)->only('index', 'show');

// Route::get('/collections', function () {
//     $client = new Client();
//     $response = $client->request('GET', 'https://api.unsplash.com/search/photos', [
//         'query' => [
//             'query' => 'laptops',
//             'client_id' => env('UNSPLASH_ACCESS_KEY'),
//             'per_page' => 30,
//             'page' => 1,
//         ],
//     ]);

//     $photos = json_decode($response->getBody()->getContents(), true);

//     $filteredPhotos = array_filter($photos['results'], function ($photo) {
//         return $photo['width'] > $photo['height'];
//     });

//     $formattedPhotos = array_map(function ($photo) {
//         return [
//             'full_url' => $photo['urls']['full'],
//             'description' => $photo['description'],
//             'alt_description' => $photo['alt_description']
//         ];
//     }, $filteredPhotos);

//     return response()->json($formattedPhotos);
// });
