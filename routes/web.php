<?php
use Illuminate\Support\Facades\Auth;

/*----------------- FrontEnd routs------------- */
Route::group(['namespace' => 'FrontEnd'],function()
{
  Route::get('/','HomeController@index');
  Route::get('/clipping-path','HomeController@clippingPath');
  Route::get('/portfolio','HomeController@portfolio');
  Route::post('/mail', 'HomeController@mail')->name('mail');
});

/*----------------- BackEnd routs------------- */
Route::group(['namespace' => 'BackEnd'],function()
{
  Route::get('/dashboard','DashboardController@dashboard')->name('home')->middleware('auth');
  Route::get('/user-list','DashboardController@userList')->middleware('auth');
});
Route::get('logout', function() {
    Auth::logout();
    return redirect('login');
})->name('logout');
Route::resource('/visitor', 'VisitorController');

Auth::routes();

Route::get('/home', 'HomeController@index');
