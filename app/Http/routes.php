<?php

Route::get('/', ['middleware' => 'guest', function () {
    return view('welcome');
}]);

Route::get('dashboard', ['as' => 'dashboard_path', 'uses' => 'UsersController@getDashboard', 'middleware' => ['auth']]);
Route::get('blog', 'ArticlesController@getBlogPosts');
Route::get('write', ['as' => 'write_article_path', 'uses' => 'ArticlesController@getWriteArticle', 'middleware' => 'auth']);
Route::post('write', ['as' => 'save_article_path', 'uses' => 'ArticlesController@postSaveArticle', 'middleware' => 'auth']);
Route::get('{slug}.html', ['as' => 'blog_post_path', 'uses' => 'ArticlesController@getBlogPost', 'middleware' => ['auth']]);
Route::get('roles', ['as' => 'my_roles_path', 'uses' => 'UsersController@getMyRoles', 'middleware' => ['auth']]);
Route::get('permissions', ['as' => 'my_permissions_path', 'uses' => 'UsersController@getMyPermissions', 'middleware' => ['auth']]);

// Authentication routes...
Route::get('login', ['as' => 'get_login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('login', ['as' => 'post_login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'get_logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('register', ['as' => 'get_register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('register', ['as' => 'post_register', 'uses' => 'Auth\AuthController@postRegister']);

// Password reset link request routes...
Route::get('password/email', ['as' => 'get_email', 'uses' => 'Auth\PasswordController@getEmail']);
Route::post('password/email', ['as' => 'post_email', 'uses' => 'Auth\PasswordController@postEmail']);

// Password reset routes...
Route::get('password/reset/{token}', ['as' => 'get_password_reset', 'uses' => 'Auth\PasswordController@getReset']);
Route::post('password/reset', ['as' => 'post_password_reset', 'uses' => 'Auth\PasswordController@postReset']);

//User routes...
Route::get('users', ['as' => 'all_users_path', 'uses' => 'UMSController@getAllUsers', 'middleware' => ['auth']]);
Route::get('users/add', ['as' => 'add_user_path', 'uses' => 'UMSController@getAddUser', 'middleware' => ['auth', 'admin']]);
Route::get('users/roles', ['as' => 'all_roles_path', 'uses' => 'UMSController@getAllRoles', 'middleware' => ['auth', 'admin']]);
Route::get('users/permissions', ['as' => 'all_permissions_path', 'uses' => 'UMSController@getAllPermissions', 'middleware' => ['auth', 'admin']]);
Route::get('{id}', ['as' => 'individual_user_articles_path', 'uses' => 'UsersController@getIndividualUserArticles', 'middleware' => ['auth']]);
