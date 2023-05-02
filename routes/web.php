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
        [
            'name' => 'Tom Cruise',
            'bio' => 'Tom Cruise is an American actor and producer. He has received various accolades for his work, including three Golden Globe Awards and three nominations for Academy Awards.',
            'avatar' => 'http://t3.gstatic.com/licensed-image?q=tbn:ANd9GcQIX0lA4_QAU3DpEar0jPCd197Hz3oHqKKrNU_de9oN45UH8HzppcaPWrMtU7AyBj3ecdMRf7Tm8w_YnX1uDdbY4zeECOPIrvu68uG4m1y8',
            'gallery' => [
                'https://images.mubicdn.net/images/cast_member/2184/cache-2992-1547409411/image-w856.jpg',
                'https://pyxis.nymag.com/v1/imgs/b39/e77/b9fa5f81b1c04bbf439ef40515b1b6e464-tom-cruise.1x.rsquare.w1400.jpg',
                'https://people.com/thmb/FtpGqwQPi-77-bNmtQCYBcEMKmw=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():focal(665x0:667x2)/GettyImages-74286514-2000-aac2c3aecaea472cb949824230cb5370.jpg',
            ]
        ],
        [
            'name' => 'Will Smith',
            'bio' => 'Willard Carroll Smith Jr. is an American actor, rapper, and film producer. Smith has been nominated for five Golden Globe Awards and two Academy Awards, and has won four Grammy Awards.',
            'avatar' => 'https://m.media-amazon.com/images/M/MV5BMGI3OTI0NjctMjM2ZC00MjZiLWIxMjctODczN2M4MTFjZmY1XkEyXkFqcGdeQXJoYW5uYWg@._V1_QL75_UX500_CR0,0,500,281_.jpg'
        ],
        [
            'name' => 'Dwayne Johnson',
            'bio' => 'Dwayne Douglas Johnson, also known by his ring name The Rock, is an American-Canadian actor, producer, businessman, retired professional wrestler, and former American football and Canadian football player.',
            'avatar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Dwayne_Johnson_2%2C_2013.jpg/220px-Dwayne_Johnson_2%2C_2013.jpg'
        ],
        [
            'name' => 'Jackie Chan',
            'bio' => 'Chan Kong-sang SBS MBE PMW, known professionally as Jackie Chan, is a Hong Kong martial artist, actor, stuntman, film director, action choreographer, screenwriter, producer, and singer.',
            'avatar' => 'http://t0.gstatic.com/licensed-image?q=tbn:ANd9GcTMPMECLkm4aywE5CKfBrPrCPHfJkNpb5hKOg_3a9S9uUu7wGQMYO6wA6pJ3CRMtd7TzVfpmbLO6Qfs_VkmMAC1TsK5f7vakuyiK0nnyFym'
        ],
        [
            'name' => 'Robert Downey Jr.',
            'bio' => 'Robert John Downey Jr. is an American actor and producer. His career has been characterized by critical and popular success in his youth, followed by a period of substance abuse and legal troubles, before a resurgence of commercial success in middle age.',
            'avatar' => 'http://t0.gstatic.com/licensed-image?q=tbn:ANd9GcSMvESXpuqK30nBhj1-eQ9KhaYkizD_7UkSCd0-7XMBI__OrUVmUwIqlDzFbsaV3x2ZxeOIImw9qd4YoAnePlZ_2ZInHfQP5_VGPRkeLw1A'
        ],
        [
            'name' => 'Chris Hemsworth',
            'bio' => 'Christopher Hemsworth is an Australian actor. He first rose to prominence in Australia playing Kim Hyde in the Australian television series Home and Away before beginning a film career in Hollywood.',
            'avatar' => 'http://t1.gstatic.com/licensed-image?q=tbn:ANd9GcSFgT7-c7V_XQUMdy3xmRRLnue_uSUIYpE2v0QWvo8NhI1N1P-pukIzeVESj-EfKdMKehoN7qem3NlWy9hbqvn8m2QnDhT6O8E1UOLlKosO'
        ],
        [
            'name' => 'Scarlett Johansson',
            'bio' => 'Scarlett Ingrid Johansson is an American actress and singer. She was the world highest-paid actress in 2018 and 2019, and has featured multiple times on the Forbes Celebrity 100 list.',
            'avatar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Scarlett_Johansson_by_Gage_Skidmore_2_%28cropped%29.jpg/220px-Scarlett_Johansson_by_Gage_Skidmore_2_%28cropped%29.jpg'
        ],
        [
            'name' => 'Chris Evans',
            'bio' => 'Christopher Robert Evans is an American actor. He first gained attention in 2005 as the Marvel Comics character Human Torch in Fantastic Four and its 2007 sequel and later gained further worldwide attention for his portrayal of Steve Rogers / Captain America in the Marvel Cinematic Universe, appearing in eleven films including four cameos.',
            'avatar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2nZPuhQdRB2lfPZuEK1H1c-_ttkvzbEk3lrB0gcir9e0bFCEL'
        ],
    ];

    return view('actors', [
        'actors' => $actors
    ]);
});

Auth::routes();

Route::get('/home', [
    App\Http\Controllers\HomeController::class, 'index'
])->name('home');
