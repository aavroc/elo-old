<?php

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

Route::get('/', 'Auth\LoginController@welcome');

Route::group(['middleware' => ['auth']], function () {
    
    //Users
    Route::get('users/{user}/module/{module}/task/code/{path?}', 'AdminController@show_code')->where('path', '.*')->name('tasks.code')->middleware('teacher'); //docent mag gebruiker details bekijken
    Route::get('users/upload_data', 'AdminController@select_file')->name('users.select_file')->middleware('admin');
    Route::post('users/upload_data', 'AdminController@upload_data')->name('users.upload_data')->middleware('admin');
    Route::post('users/change_passwords', 'AdminController@change_password')->name('users.change_password')->middleware('admin');
    Route::get('users/create', 'AdminController@create')->name('users.create')->middleware('admin');
    Route::get('users', 'AdminController@index')->name('users.index')->middleware('teacher'); //docent mag gebruikers lijst zien
    Route::post('users', 'AdminController@store')->name('users.store')->middleware('admin');
    Route::get('users/{user}', 'AdminController@show')->name('users.show')->middleware('teacher'); //docent mag gebruiker details bekijken
    Route::get('users/{user}/module/{module}', 'AdminController@show_module')->name('users.repo')->middleware('teacher'); //docent mag gebruiker details bekijken
    Route::get('users/{user}/module/{module}/task/{path?}', 'AdminController@show_task')->where('path', '.*')->name('users.task')->middleware('teacher'); //docent mag gebruiker details bekijken
    Route::get('users/{user}/edit', 'AdminController@edit')->name('users.edit')->middleware('admin');
    Route::put('users/{user}', 'AdminController@update')->name('users.update')->middleware('admin');
    Route::post('students/update_level', 'AdminController@update_level')->name('students.update_level')->middleware('admin');

    //Classrooms
    Route::get('classrooms', 'ClassroomController@index')->name('classrooms.index')->middleware('teacher');
    Route::get('classrooms/{classroom}', 'ClassroomController@show')->name('classrooms.show')->middleware('teacher');
    Route::post('classrooms/{classroom}/reset_levels', 'ClassroomController@reset_levels')->name('reset_levels')->middleware('admin');

    //DASHBOARDS
    Route::post('/student', 'StudentController@form_request')->name('student.request')->middleware('student'); 
    Route::get('/take_request/{teacher}-{student}-{user_request}', 'AdminController@handleRequest')->name('handleRequest')->middleware('teacher'); 
    Route::post('/request_to_done', 'AdminController@request_to_done')->name('request_to_done')->middleware('teacher'); 

    Route::get('/student', 'StudentController@dashboard')->name('student')->middleware('student'); //1
    Route::get('/admin', 'AdminController@dashboard')->name('admin')->middleware('admin');
    Route::get('/teacher', 'TeacherController@dashboard')->name('teacher')->middleware('teacher');

    //Challenges
    Route::get('challenges', 'ChallengeController@index')->name('challenges.index');
    Route::get('challenges/{challenge}', 'ChallengeController@show')->name('challenges.show');
    Route::post('challenges/{challenge}/link-modules', 'ChallengeController@link_modules')->name('link-modules')->middleware('teacher');
    
    
    //Modules
    Route::get('modules', 'ModuleController@index')->name('modules.index');
    Route::get('modules/{module}', 'ModuleController@show')->name('modules.show');
    Route::get('retrieve/data', 'AdminController@retrieve')->name('retrieve')->middleware('admin'); //haal de taken op van github
    Route::get('github-call', 'GithubController@redirectToProvider')->name('github.call');
    Route::get('github-callback', 'GithubController@handleProviderCallback')->name('github.callback');

    //Tasks
    Route::get('tasks', 'TaskController@index')->name('tasks.index')->middleware('teacher'); //haal de taken op van github
    Route::get('tasks/{task}', 'TaskController@show')->name('tasks.show')->middleware('student'); //haal de taken op van github
    Route::post('tasks/{task}/tags', 'TaskController@tag')->name('tasks.tag')->middleware('teacher'); //haal de taken op van github
    
    //Tags
    Route::get('tags', 'TagController@index')->name('tags.index')->middleware('teacher'); //haal de taken op van github
    Route::get('tags/create', 'TagController@create')->name('tags.create')->middleware('teacher'); //haal de taken op van github
    Route::post('tags', 'TagController@store')->name('tags.store')->middleware('teacher'); //haal de taken op van github
    Route::get('tags/{tag}', 'TagController@edit')->name('tags.edit')->middleware('teacher'); //haal de taken op van github
    Route::put('tags/{tag}/update', 'TagController@update')->name('tags.update')->middleware('teacher'); //haal de taken op van github
    Route::delete('tags/{tag}/delete', 'TagController@delete')->name('tags.delete')->middleware('teacher'); //haal de taken op van github
     
    


    //LOGOUT
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
