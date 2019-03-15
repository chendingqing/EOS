<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where all API routes are defined.
|
*/





Route::resource('tags', 'TagsAPIController');



/**
 * api接口
 */

/**
 * 用户
 */
    Route::any('/api/user/reg', "UserController@reg")->name("api.user.reg");//注册
    Route::any('/api/user/login', "UserController@login")->name("api.user.login");//登录
