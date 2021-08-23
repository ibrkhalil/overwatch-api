<?php

Route::group(['middleware' => 'web'], function () {
    Route::get('/', ['uses' => 'IndexController@index', 'as' => 'web.index']);
    Route::get('/contribution', ['uses' => 'IndexController@contribution', 'as' => 'web.contribution']);

    Route::group(['prefix' => 'docs'], function () {
        Route::get('/{version}', ['uses' => 'DocumentationController@index', 'as' => 'web.docs']);
    });
});
