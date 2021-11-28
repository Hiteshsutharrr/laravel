<?php
use Illuminate\Support\facades\Route;
use App\Http\Controllers\UsersController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/users/{lang}',function($lang){
    App::setlocale($lang);
    return view('users');
});
// Route::view('users','users');
// Route::post('users',[UsersController::class,'getData']);
// Route::view('check','check');
// Route::get('/logout',function(){
//     if (session()->has('name'))
//     {
//         session()->pull('name',null);
//     }
//     return redirect('/users');
// });
// Route::get('/users',function(){
//     if (session()->has('name'))
//     {
//         return redirect('check');
//     }
//     return view('/users');
// });
// Route::get('/check',function(){
//     if (session()->has('name'))
//     {
//         return view('check');
//     }
//     return redirect('/users');
// });

// Route::get('users',[UsersController::class,'index']);
// Route::view('noaccess','noaccess');
// Route::group(['middleware'=>['protectPage']],function(){
//     Route::view('check','check');
// });
// Route::view('check','check')->middleware('protectedPage');