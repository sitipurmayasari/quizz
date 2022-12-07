<?php

use App\Http\Controllers\Backend\QuizController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
    
// })->name('home');

Route::get('/', 'LandingController@index')->name('home');
Route::get('/login', 'LandingController@login')->name('login');
Route::get('/curicullum', 'CurrController@index')->name('curicullum');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/register', 'RegisterController@index')->name('register');
Route::get('/keluar', 'LandingController@logout')->name('logout2');

Auth::routes();

// Route::get('quiz', 'QuizController@index')->name('quiz');
// Route::get('quiz/accept/{slug}/{token}', 'QuizController@accept')->name('quiz.accept');
// Route::post('quiz/accept/{slug}/{token}', 'QuizController@answer');
Route::group([  
    'middleware' => ['auth'],
    'namespace' => 'Siswa'], function()
{
    Route::get('/home', 'HomeController@index')->name('siswa.home');
    Route::get('/materi', 'MateriController@index')->name('siswa.materi');
    Route::post('/materi/store', 'MateriController@store')->name('siswa.store');
    Route::get('/siswa/quiz/{slug}', 'QuizzController@index')->name('siswa.quiz');
    Route::get('/siswa/quiz/accept/{slug}', 'QuizzController@accept')->name('siswa.quiz.accept');
    Route::post('/siswa/quiz/accept/{slug}', 'QuizzController@answer');

    });
    Route::group([  
                    'middleware' => ['auth'],
                    'namespace' => 'Backend'], function()
    {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('search/user', 'SearchUserController@search')->name('search-user');
    Route::post('user-permission-update/{id}', 'UserController@updatePermission')->name('user-permission-update');
    
    Route::resource('user', 'UserController');
    Route::resource('role', 'RoleController');

    Route::get('progress', 'NilaiController@progress')->name('progress');
    Route::get('nilai', 'NilaiController@index')->name('nilai');
    Route::get('nilai/detail', 'NilaiController@detail')->name('nilai.detail');

    Route::get('quiz', 'QuizController@index')->name('quiz.index');
    Route::post('quiz', 'QuizController@store');
    Route::get('quiz/view/{slug}', 'QuizController@view')->name('quiz.view');
    Route::get('quiz/edit/{slug}', 'QuizController@edit')->name('quiz.edit');
    Route::get('quiz/soal/edit/{slug}/{id}', 'QuizController@edit_soal')->name('quiz.soal.edit');
    Route::get('quiz/soal/delete/{id}', 'QuizController@hapus_soal')->name('quiz.soal.delete');
    Route::post('quiz/soal/update/{id}', 'QuizController@update_soal')->name('quiz.soal.update');

    Route::post('quiz/edit/{slug}', 'QuizController@update');
    Route::delete('quiz/delete', 'QuizController@destroy')->name('quiz.destroy');
    Route::post('quiz/invite/{slug}', 'QuizShareController@invite')->name('quiz.invite');
    
});