<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// frontend
Route::get('/', array('as' => 'home', function() {
    return 'hello, world!';
}));


// backend
Route::group(array('prefix' => 'backend', 'before' => 'auth'), function() {

    // === dashboard ===
    
    Route::get('/', array(
        'as' => 'get_backend_dashboard',
        'uses' => '\Backend\Dashboard@index'
    ));

    // === auth ===

    Route::get('/logout', array(
        'as' => 'get_backend_logout',
        'uses' => '\Backend\Auth@logout'
    ));

    // === user ===

    Route::get('/user', array(
        'as' => 'get_backend_user',
        'uses' => '\Backend\User@index'
    ));
    
    Route::get('/user/me', array(
        'as' => 'get_backend_user_me',
        'uses' => '\Backend\User@me'
    ));

    Route::post('/user/me', array(
        'as' => 'post_backend_user_me',
        'uses' => '\Backend\User@update_me'
    ));

    Route::post('/user/me/password', array(
        'as' => 'post_backend_user_me_password',
        'uses' => '\Backend\User@update_me_password'
    ));

    // === site ===
    
    Route::get('/site', array(
        'as' => 'get_backend_site',
        'uses' => '\Backend\Site@index'
    ));

    Route::post('/site', array(
        'as' => 'post_backend_site',
        'uses' => '\Backend\Site@update'
    ));
});

// === auth ===

Route::get('/backend/login', array(
    'as' => 'get_backend_login',
    'uses' => '\Backend\Auth@index'
));

Route::post('/backend/login', array(
    'as' => 'post_backend_login',
    'uses' => '\Backend\Auth@login'
));
