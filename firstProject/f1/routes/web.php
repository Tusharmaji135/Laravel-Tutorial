<?php

use Dotenv\Util\Str;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;

function getUsers()
{
    return [
        1 => [
            "name" => "John Doe",
            "phone" => "1234567890",
            "city" => "New York"
        ],
        2 => [
            "name" => "Jane Smith",
            "phone" => "9876543210",
            "city" => "Los Angeles"
        ],
        3 => [
            "name" => "Mike Johnson",
            "phone" => "5551234567",
            "city" => "Chicago"
        ],
        4 => [
            "name" => "Emily Davis",
            "phone" => "4449876543",
            "city" => "Houston"
        ]
    ];
}

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test', function () {
    return view('test');
});



// Route::view('/post', 'post'); //another way to view
Route::get('/post/firstpost', function () {
    return view('firstpost');
});

// Route::get('/about/{id?}/comment/{cid?}', function (string $id = null, string $cid = null) {
//     if ($id || $cid) {
//         return view('about', ['id' => $id, 'cid' => $cid]);
//     } else {
//         return "NO DST";
//     }
// })->whereIn('id', ['movie', 'anime', 'news18'])->whereAlphaNumeric('cid');

// Route::get('/contact',function(){
//     return view('contact');
// });

//named route
Route::get('/postss', function () {
    return view('post');
})->name('mypost');


//redirect
Route::redirect('/tushar', '/contact', 301); //redirect to contact page when user is type /tushar


//route groups
Route::prefix('page')->group(function () {
    Route::get('/post', function () {          //-> /page/post
        return "<h1>post of the page</h1>";
    });
    Route::get('/gallery', function () {          //-> /page/gallery
        return "<h1>gallery of the page</h1>";
    });
});

//fallback
Route::fallback(function () {
    return view('error');             // occurs when wrong path given
});


// Route to view
Route::get('/users', function () {
    $name = "Tushar";
    $arr = getUsers();
    return view('users', [
        'user' => $arr,
        'city' => 'Surat',
        // 'js' => '<script> alert("WELCOME USER") </script>'
    ]);

    // return view('users')->with('user', $name)->with('city', 'Surat');

    // return view('users')->withUser($name)->withCity('Surat');


});

Route::get('/user/{id}', function ($id) {
    $users = getUsers();
    abort_if(!isset($users[$id]), 404, 'User not found');
    $user = $users[$id];
    return view('user', ['id' => $user]);
})->name('view.user');


//controllers--------------------------------------------------------------

// Route::get('/h1', [PageController::class, 'showHome'])->name('home');
// Route::get('/s1/{id}', [PageController::class, 'showUser']);
// Route::get('/blog', [PageController::class, 'showBlog'])->name('blog');

//group controllers
Route::controller(PageController::class)->group(function () {
    Route::get('/h1', 'showHome')->name('home');
    Route::get('/s1/{id}', 'showUser');
    Route::get('/blog', 'showBlog')->name('blog');
});

//single invoke controller
Route::get('/test',TestingController::class);