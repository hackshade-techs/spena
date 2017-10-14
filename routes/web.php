<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('contact', 'ContactController@store');
Route::get('classes/{slug}', 'ClassController@show');
Route::resource('alumni-register', 'AlumniController');
Route::resource('comment', 'CommentController');
Route::get('articles/{slug}', 'Api\ArticleController@show');
Route::get('events/{event}','PageController@singleEvent');
Route::get('download/{uploads}/{pathToFile}','ResourceController@index');

// --------------------
// Backpack\Demo routes
// --------------------
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace'  => 'Admin',
], function () {
    // CRUD resources and other admin routes
    //CRUD::resource('monster', 'MonsterCrudController');
    CRUD::resource('event', 'EventCrudController');
    CRUD::resource('gallery','GalleryCrudController');
    CRUD::resource('blog','BlogCrudController');
    CRUD::resource('blogcategory','BlogcategoryCrudController');
    CRUD::resource('eventcategory','EventcategoryCrudController');
    CRUD::resource('gallerycategory','GallerycategoryCrudController');
    CRUD::resource('klass','KlassCrudController');
    CRUD::resource('stream','StreamCrudController');
    CRUD::resource('staffcategory','StaffcategoryCrudController');
    CRUD::resource('staff','StaffCrudController');
    CRUD::resource('designation','DesignationCrudController');
    CRUD::resource('subject','SubjectCrudController');
    CRUD::resource('alumni','AlumniCrudController');
    CRUD::resource('document','DocumentCrudController');
    CRUD::resource('documenttype','DocumenttypeCrudController');
    CRUD::resource('studentlife','StudentlifeCrudController');
    CRUD::resource('contacts','ContactCrudController');
    CRUD::resource('comment','CommentCrudController');
    CRUD::resource('testimonial','TestimonialCrudController');
    CRUD::resource('multiple','MultipleCrudController');
    CRUD::resource('resource','ResourceCrudController');

});

Route::get('api/article', 'Api\ArticleController@index');
Route::get('api/article/{id}', 'Api\ArticleController@show');

Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);
