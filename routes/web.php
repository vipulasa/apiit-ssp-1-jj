<?php

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
});

Route::get('/actors', function () {

    // create an array of actors with their name and bio and an avatar image
    $actors = [
        ['name' => 'Tom Cruise', 'bio' => 'Tom Cruise is an American actor and producer. He has received various accolades for his work, including three Golden Globe Awards and three nominations for Academy Awards.', 'avatar' => 'https://placehold.co/400'],
        ['name' => 'Will Smith', 'bio' => 'Willard Carroll Smith Jr. is an American actor, rapper, and film producer. Smith has been nominated for five Golden Globe Awards and two Academy Awards, and has won four Grammy Awards.', 'avatar' => 'https://placehold.co/400'],
        ['name' => 'Dwayne Johnson', 'bio' => 'Dwayne Douglas Johnson, also known by his ring name The Rock, is an American-Canadian actor, producer, businessman, retired professional wrestler, and former American football and Canadian football player.', 'avatar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Dwayne_Johnson_2%2C_2013.jpg/220px-Dwayne_Johnson_2%2C_2013.jpg'],
        ['name' => 'Adam Sandler', 'bio' => 'Adam Richard Sandler is an American actor, comedian, screenwriter, film producer, and singer-songwriter.', 'avatar' => 'https://placehold.co/400'],
        ['name' => 'Jackie Chan', 'bio' => 'Chan Kong-sang SBS MBE PMW, known professionally as Jackie Chan, is a Hong Kong martial artist, actor, stuntman, film director, action choreographer, screenwriter, producer, and singer.', 'avatar' => 'https://placehold.co/400'],
        ['name' => 'Robert Downey Jr.', 'bio' => 'Robert John Downey Jr. is an American actor and producer. His career has been characterized by critical and popular success in his youth, followed by a period of substance abuse and legal troubles, before a resurgence of commercial success in middle age.', 'avatar' => 'https://placehold.co/400'],
        ['name' => 'Chris Hemsworth', 'bio' => 'Christopher Hemsworth is an Australian actor. He first rose to prominence in Australia playing Kim Hyde in the Australian television series Home and Away before beginning a film career in Hollywood.', 'avatar' => 'https://placehold.co/400'],
        ['name' => 'Scarlett Johansson', 'bio' => 'Scarlett Ingrid Johansson is an American actress and singer. She was the world highest-paid actress in 2018 and 2019, and has featured multiple times on the Forbes Celebrity 100 list.', 'avatar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Scarlett_Johansson_by_Gage_Skidmore_2_%28cropped%29.jpg/220px-Scarlett_Johansson_by_Gage_Skidmore_2_%28cropped%29.jpg'],
        ['name' => 'Chris Evans', 'bio' => 'Christopher Robert Evans is an American actor. He first gained attention in 2005 as the Marvel Comics character Human Torch in Fantastic Four and its 2007 sequel and later gained further worldwide attention for his portrayal of Steve Rogers / Captain America in the Marvel Cinematic Universe, appearing in eleven films including four cameos.', 'avatar' => 'https://placehold.co/400'],
    ];

    return view('actors', [
        'actors' => $actors
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
