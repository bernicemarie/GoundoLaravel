<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;
use App\Models\User;
use App\Models\Post;
use App\Models\Cours;
use App\Models\Contact;
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
    
    return view('frontend.accueil');
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

//Cours routes
Route::prefix('Cours')->group(function(){
Route::get('/mes-cours',[CoursController::class,'CoursView'])->name('cours.view');
Route::get('/ajout',[CoursController::class,'CoursAdd'])->name('cours.add');
Route::post('/ajouter',[CoursController::class,'CoursStore'])->name('cours.store');
Route::get('/edition/{id}',[CoursController::class,'CoursEdit'])->name('cours.edit');
Route::post('/modifications/{id}',[CoursController::class,'CoursUpdate'])->name('cours.update');
Route::get('/suppression/{id}',[CoursController::class,'CoursDelete'])->name('cours.delete');
 
});
//End Cours routes

//Contact routes
Route::prefix('contacts')->group(function(){ 
Route::get('/envoyer-message',[ContactController::class, 'ContactSend'])->name('contact.send');
Route::get('/contacts',[ContactController::class, 'ContactView'])->name('contact.view');
Route::post('/enregistrer',[ContactController::class, 'ContactStore'])->name('contact.store');
Route::get('/edition/{id}',[ContactController::class, 'ContactEdit'])->name('contact.edit');
Route::post('/update/{id}',[ContactController::class, 'ContactUpdate'])->name('contact.update');
Route::get('/suppression/{id}',[ContactController::class,'ContactDelete'])->name('contact.delete');

});//END Contact Routes
//Contact routes
Route::prefix('language')->group(function(){ 
Route::get('/Francais',[LanguageController::class, 'French'])->name('francais');
Route::get('/English',[LanguageController::class, 'English'])->name('english');
 

});//END Contact Routes


});//END MIDDLEWARE
