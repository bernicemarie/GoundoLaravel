<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Models\User;
use App\Models\Post;
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

//Start E-Mail Verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
//End E-Mail Verification

Route::get('/', function () {
    return view('Auth.login');
})->name('home');


Route::middleware(['auth:sanctum', 'verified'])->get('/accueil', function () {
    $data['publications'] = Post::where('post_author', Auth::user()->name)->count();
    $data['users'] = User::all()->count();
    $data['total'] = Post::all()->count();
    if(Auth::user()->role == 'admin')
    return view('admin.index',$data);
    else 
    return view('user.index',$data);
    
})->middleware('loginstatus')->name('dashboard');
//logout route
Route::get('Déconexion',[logoutController::class,'Logout'])->name('app.logout');
//End logout route

Route::group(['middleware'=> 'auth'],function(){
      //user routes
Route::prefix('utilisateurs')->group(function(){
Route::get('/liste-utilisateurs',[UserController::class,'UserView'])->name('user.view');
Route::get('/ajout',[UserController::class,'UserAdd'])->name('user.add');
Route::post('/ajouter',[UserController::class,'UserStore'])->name('user.store');
Route::get('/edition/{id}',[UserController::class,'UserEdit'])->name('user.edit');
Route::post('/modifications/{id}',[UserController::class,'UserUpdate'])->name('user.update');
Route::get('/status/on/{id}',[UserController::class,'UserStatusOn'])->name('user.statuson');
Route::get('/status/off/{id}',[UserController::class,'UserStatusOff'])->name('user.statusoff');
Route::get('/suppression/{id}',[UserController::class,'UserDelete'])->name('user.delete');
});
//End user routes


//user Profile routes
Route::prefix('Profile')->group(function(){
    /*Route::get('/mon-profile',[ProfileController::class,'ProfileView'])->name('profile.view');*/
    /*Route::get('/edition',[ProfileController::class,'ProfileEdit'])->name('profile.edit');*/
   /* Route::post('/modification-profile',[ProfileController::class,'ProfileUpdate'])->name('profile.update');*/
    Route::get('/mon-image',[UserController::class,'ImageView'])->name('image.view');
    Route::post('/image',[UserController::class,'ImageUpdate'])->name('image.update');
    Route::get('/mot-de-passe',[UserController::class,'PasswordView'])->name('password.view');
    Route::post('/modification-de-passe',[UserController::class,'PasswordStore'])->name('password.store');
});
//End user Profile routes

   //Posts routes
Route::prefix('Posts')->group(function(){
Route::get('/mes-posts',[PostController::class,'PostView'])->name('post.view');
Route::get('/ajout',[PostController::class,'PostAdd'])->name('post.add');
Route::post('/ajouter',[PostController::class,'PostStore'])->name('post.store');
Route::get('/edition/{id}',[PostController::class,'PostEdit'])->name('post.edit');
Route::post('/modifications/{id}',[PostController::class,'PostUpdate'])->name('post.update');
Route::get('/suppression/{id}',[PostController::class,'PostDelete'])->name('post.delete');
 
});
//End Posts routes


});//END MIDDLEWARE
