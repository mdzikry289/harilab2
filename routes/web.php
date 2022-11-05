<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogpostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SuperTeamController;
use App\Models\Blog;
use App\Models\Blogpost;
use App\Models\Category;
use App\Models\SuperTeam;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function (){
//     return view('home');
// });

//frontend route

Route::get('/', [HomeController::class, 'index']);

Route::get('/services', [ServicesController::class, 'index']);

Route::get('/projects', [ProjectsController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/blog/{id}/{title}', [BlogController::class, 'show']);

Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::get('/portfolio/{id}/{name}', [PortfolioController::class, 'show']);

Route::get('/about/{id}/{name}', [SuperTeamController::class, 'show']);

Route::get('/about', [SuperTeamController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

//backend admin route
Route::resource('blogpost', BlogpostController::class)->middleware('auth:sanctum');

Route::post('images', [ImageController::class], 'store')->name('images.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {

        $postCount = Blog::All()->count();
        $userCount = User::All()->count();
        $teamCount = SuperTeam::All()->count();

        return view('dashboard',[
            'pageTitle' => 'Dashboard',
            'postCount' => $postCount,
            'userCount' => $userCount,
            'teamCount' => $teamCount
        ]);
    })->name('dashboard');
});

// Route::resource('blog', BlogController::class)->middleware('auth:sanctum');