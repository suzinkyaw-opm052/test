<?php

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
Route::model('tasks', 'Task');
Route::model('projects', 'Project');

//Route::get('/taskdelete/{id}',function($id){
//    echo $id;exit;
//   var_dump( App\Project::whereSlug($id)->first());exit;
//    
//});

Route::get('/taskdelete/{id}', ['uses' =>'TasksController@destroy']);
Route::get('/taskcreate/{id}', ['uses' =>'TasksController@create']);
Route::get('/taskstore', ['uses' =>'TasksController@store']);

// Provide controller methods with object instead of ID

 
// Use slugs rather than IDs in URLs
//Route::bind('tasks', function($value, $route) {
//	return App\Task::whereSlug($value)->first();
//});
//Route::bind('projects', function($value, $route) {
//	return App\Project::whereSlug($value)->first();
//});
// 
Route::resource('projects', 'ProjectsController');
Route::resource('tasks', 'TasksController');

