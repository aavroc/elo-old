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
    Route::get('/take_request/{user_request}', 'AdminController@handleRequest')->name('handleRequest')->middleware('teacher'); 
    Route::post('/request_to_done', 'AdminController@request_to_done')->name('request_to_done')->middleware('teacher'); 

    Route::get('/student', 'StudentController@dashboard')->name('student')->middleware('student'); //1
    Route::get('/admin', 'AdminController@dashboard')->name('admin')->middleware('admin');
    Route::get('/teacher', 'TeacherController@dashboard')->name('teacher')->middleware('teacher');

    //Challenges
    Route::get('challenges', 'ChallengeController@index')->name('challenges.index');
    Route::get('challenges/{challenge}', 'ChallengeController@show')->name('challenges.show')->middleware('student');
    Route::get('challenges/{challenge}/edit', 'ChallengeController@edit')->name('challenges.edit')->middleware('teacher');
    Route::post('challenges/{challenge}/link-modules', 'ChallengeController@link_modules')->name('link-modules')->middleware('teacher');
    
    
    //Modules
    Route::get('modules', 'ModuleController@index')->name('modules.index')->middleware('teacher');
    Route::get('modules/{module}', 'ModuleController@show')->name('modules.show')->middleware('student');
    Route::get('modules/{module}/teacher', 'ModuleController@show_teacher')->name('modules.show_teacher')->middleware('teacher');
    Route::get('retrieve/data', 'AdminController@retrieve')->name('retrieve')->middleware('admin'); //
    Route::get('github-call', 'GithubController@redirectToProvider')->name('github.call');
    Route::get('github-callback', 'GithubController@handleProviderCallback')->name('github.callback');

    //Tasks
    Route::get('tasks', 'TaskController@index')->name('tasks.index')->middleware('teacher'); // Overzicht van alle taken
    Route::get('tasks/{task}', 'TaskController@show')->name('tasks.show')->middleware('student'); // gebruiker ziet de inhoud van een taak en haar tags
    Route::post('tasks/{task}/tags', 'TaskController@tag')->name('tasks.tag')->middleware('teacher'); // Geef tags op bij individuele taken
    
    Route::post('tasks/{task}/mark', 'TaskController@mark')->name('tasks.mark')->middleware('student'); // Student kan hier taken markeren als voldaan
    
    //Tags
    Route::get('tags', 'TagController@index')->name('tags.index')->middleware('teacher'); // Overzicht van alle tags
    Route::get('tags/create', 'TagController@create')->name('tags.create')->middleware('teacher'); // Maak een tag aan
    Route::post('tags', 'TagController@store')->name('tags.store')->middleware('teacher'); // Sla de tag op
    Route::get('tags/{tag}', 'TagController@edit')->name('tags.edit')->middleware('teacher'); // Wijzig een tagnaam
    Route::put('tags/{tag}/update', 'TagController@update')->name('tags.update')->middleware('teacher'); // Update een tag
    Route::delete('tags/{tag}/delete', 'TagController@delete')->name('tags.delete')->middleware('teacher'); // Verwijder een tag
     
    


    //LOGOUT
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
