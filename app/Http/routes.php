<?php

Route::group(['middleware' =>['web']], function () {
Route::resource('posts', 'PostsController');
});
