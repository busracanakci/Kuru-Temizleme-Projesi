<?php

Route::get('/', 'front\indexController@index')->name('index');


Auth::routes();


Route::group(['namespace'=>'admin','prefix'=>'admin','as'=>'admin.','middleware'=>['auth','AdminCtrl']],function () {
    Route::get('/', 'indexController@index')->name('index');

    Route::group(['namespace' => 'kurutemizleme', 'prefix' => 'kurutemizleme', 'as' => 'kurutemizleme.'], function () {
        Route::get('/', 'indexController@index')->name('index');
        Route::get('/ekle', 'indexController@create')->name('create');
        Route::post('/ekle', 'indexController@store')->name('create.post');
        Route::get('/duzenle/{id}', 'indexController@edit')->name('edit');
        Route::post('/duzenle/{id}', 'indexController@update')->name('edit.post');
        Route::get('/sil/{id}', 'indexController@delete')->name('delete');


    });
    Route::group(['namespace' => 'utu', 'prefix' => 'utu', 'as' => 'utu.'], function () {
        Route::get('/', 'indexController@index')->name('index');
        Route::get('/ekle', 'indexController@create')->name('create');
        Route::post('/ekle', 'indexController@store')->name('create.post');
        Route::get('/duzenle/{id}', 'indexController@edit')->name('edit');
        Route::post('/duzenle/{id}', 'indexController@update')->name('edit.post');
        Route::get('/sil/{id}', 'indexController@delete')->name('delete');

    });
    Route::group(['namespace' => 'yikama', 'prefix' => 'yikama', 'as' => 'yikama.'], function () {
        Route::get('/', 'indexController@index')->name('index');
        Route::get('/ekle', 'indexController@create')->name('create');
        Route::post('/ekle', 'indexController@store')->name('create.post');
        Route::get('/duzenle/{id}', 'indexController@edit')->name('edit');
        Route::post('/duzenle/{id}', 'indexController@update')->name('edit.post');
        Route::get('/sil/{id}', 'indexController@delete')->name('delete');
    });
    Route::group(['namespace' => 'slider', 'prefix' => 'slider', 'as' => 'slider.'], function () {
        Route::get('/', 'indexController@index')->name('index');
        Route::get('/ekle', 'indexController@create')->name('create');
        Route::post('/ekle', 'indexController@store')->name('create.post');
        Route::get('/duzenle/{id}', 'indexController@edit')->name('edit');
        Route::post('/duzenle/{id}', 'indexController@update')->name('edit.post');
        Route::get('/sil/{id}', 'indexController@delete')->name('delete');
    });

});
