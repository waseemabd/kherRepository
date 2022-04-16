<?php


use Illuminate\Support\Facades\Route;


Route::get('home', [App\Http\Controllers\Site\HomeController::class, 'home'])->name('site.home');
Route::get('/courses', [App\Http\Controllers\Site\HomeController::class, 'courses'])->name('courses');
Route::get('/user-blogs', [App\Http\Controllers\Site\BlogController::class, 'GetAllBlogs'])->name('user_blogs');
Route::get('/blog-details/{id}', [App\Http\Controllers\Site\BlogController::class, 'GetBlogDetails'])->name('blog_details');
Route::post('/reply/store', [App\Http\Controllers\Site\BlogController::class, 'store'])->name('reply.store');
Route::post('/comment/store', [App\Http\Controllers\Site\BlogController::class, 'Commentstore'])->name('comment.store');

//Route::get('user/blogs',function (){
//    return view('user.blog');
//});


Route::get('/logout', [App\Http\Controllers\Site\LoginController::class, 'logoutUser'])->name('user.logout');

Route::get('site/login', [App\Http\Controllers\Site\LoginController::class, 'getLogin'])->name('getLogin');
Route::post('user/login',  [App\Http\Controllers\Site\LoginController::class, 'login'])->name('user.login');
Route::get('user/login',  [App\Http\Controllers\Site\LoginController::class, 'login'])->name('user.loginUser');



///////////////////// for students //////////////////////////////////

Route::group(['prefix' => 'student','middleware' => ['auth-student:student' , 'localization']], function () {


});


/////////////////// for admins //////////////////////////////////
Route::group(['prefix' => 'user','middleware' => ['auth-user:user' , 'localization']], function () {


});