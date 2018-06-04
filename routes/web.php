<?php
use Illuminate\Support\Facades\App;
use App\Events\Chat;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumno','AlumnoController@index');
Route::get('/echo','AlumnoController@echo');

Route::get('/alumno/{id}','AlumnoController@show');

Route::post('/chat','AlumnoController@chat');
Route::get('/messages',function(){

    return response()->json([['message'=> 'test']]);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bridge', function()
{
    event(new Chat(['message' =>'olakpex']));

    return 'ok';
});