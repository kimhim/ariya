<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::post('user/submit', ['as' => 'user.submit', 'middleware' => ['web'], 'uses' => 'UserController@store']);
Route::post('user/json', ['as' => 'user.json', 'middleware' => ['web'], 'uses' => 'UserController@userjson']);
Route::get('login', ['as' => 'user.json', 'middleware' => ['web'], 'uses' => 'UserController@userlogin']);
Route::get('staff', ['as' => 'staff', 'middleware' => ['web'], 'uses' => 'StaffController@index']);
Route::get('staff/leave', ['as' => 'staff.leave', 'middleware' => ['web'], 'uses' => 'StaffController@staffList']);
Route::get('user/logout', ['as'=>'logout','middleware'=>['web'],'uses'=>'UserController@logout']);
Route::get('staff/add',['as'=>'staff.new','middleware'=>['web'],'uses'=>'StaffController@add']);

Route::get('setlang/{lang}', function($lang)
{
    Session::put('locale', $lang);
   return redirect('/');
});

// Route::get('user/registration', ['as' => 'user.create', 'uses' => 'UserController@index']);
// Route::post('user/submit', ['as' => 'user.submit', 'uses' => 'UserController@store']);
Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('Gallery',['as'=>'photo_gallery','middleware'=>['web'],'uses'=>'HomeController@photo_gallery']);
    Route::get('editor', function()
    {
    	return view('tinymce');
    });
    Route::get('Tourism',['as'=>'tourism','middleware'=>['web'],function(){
    	return view('frontend.tourism');
    }]);
    Route::get('Product-Detail',['as'=>'detail','middleware'=>['web'],function(){
    	return view('frontend.detail');
    }]);
});

Route::get('setlang/{lang}', function($lang)
{
	Session::put('locale', $lang);
	return redirect('/');
});

Route::get('autocomplete', function()
{
    return View::make('jquery-ui');
});


//Admin routes
Route::any('admin',['as'=>'admin','middleware'=>['web'],'uses'=>'UserController@showlogin']);

Route::any('admin/dashboard',['as'=>'dashboard','middleware'=>['web'],'uses'=>'UserController@dashboard']);

Route::any('admin/login', ['as'=>'dologin','middleware'=>['web'],'uses'=>'UserController@dologin']);
Route::get('admin/logout',['as'=>'admin.logout','middleware'=>['web'],'uses'=>'UserController@logout']);

