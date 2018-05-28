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

Route::get('/', 'HomeController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {

    //Rutas de Alumnos
    Route::get('/students', 'StudentsController@index')->name('students.index')->middleware('permission:students.index');
    Route::get('/students/create', 'StudentsController@create')->name('students.create')->middleware('permission:students.create');
    Route::post('/students/store', 'StudentsController@store')->name('students.store')->middleware('permission:students.create');
    Route::get('/students/{student}/edit', 'StudentsController@edit')->name('students.edit')->middleware('permission:students.edit');
    Route::put('/students/{student}', 'StudentsController@update')->name('students.update')->middleware('permission:students.edit');
    Route::get('/students/{student}', 'StudentsController@show')->name('students.show')->middleware('permission:students.show');
    Route::delete('/students/{student}', 'StudentsController@destroy')->name('students.destroy')->middleware('permission:students.destroy');

    //Rutas de Empleados
    Route::get('/employes', 'EmployesController@index')->name('employes.index')->middleware('permission:employes.index');
    Route::get('/employes/create', 'EmployesController@create')->name('employes.create')->middleware('permission:employes.create');
    Route::post('/employes/store', 'EmployesController@store')->name('employes.store')->middleware('permission:employes.create');
    Route::get('/employes/{employe}/edit', 'EmployesController@edit')->name('employes.edit')->middleware('permission:employes.edit');
    Route::put('/employes/{employe}', 'EmployesController@update')->name('employes.update')->middleware('permission:employes.edit');
    Route::get('/employes/{employe}', 'EmployesController@show')->name('employes.show')->middleware('permission:employes.show');
    Route::delete('/employes/{employe}', 'EmployesController@destroy')->name('employes.destroy')->middleware('permission:employes.destroy');

    //Rutas de Servicios
    Route::get('/services', 'ServicesController@index')->name('services.index');
    Route::delete('/services/{service}', 'ServicesController@destroy')->name('services.destroy');

    //Ruta de usuarios
    Route::get('users', 'UsersController@index')->name('users.index')
        ->middleware('permission:users.index');
    Route::get('users/create', 'UsersController@create')->name('users.create')
        ->middleware('permission:users.create');
    Route::post('users/store', 'UsersController@store')->name('users.store')
        ->middleware('permission:users.create');
    Route::put('users/{user}', 'UsersController@update')->name('users.update')
        ->middleware('permission:users.edit');
    Route::get('users/{user}', 'UsersController@show')->name('users.show')
        ->middleware('permission:users.show');
    Route::delete('users/{user}', 'UsersController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');
    Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit')
        ->middleware('permission:users.edit');

    //Rutas de roles
    Route::post('roles/store', 'RolesController@store')->name('roles.store')
        ->middleware('permission:roles.create');

    Route::get('roles', 'RolesController@index')->name('roles.index')
        ->middleware('permission:roles.index');

    Route::get('roles/create', 'RolesController@create')->name('roles.create')
        ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RolesController@update')->name('roles.update')
        ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RolesController@show')->name('roles.show')
        ->middleware('permission:roles.show');
        
    Route::delete('roles/{role}', 'RolesController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');
        
    Route::get('roles/{role}/edit', 'RolesController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');

    //Rutas de permisos
    Route::post('permissions/store', 'PermissionsController@store')->name('permissions.store')
        ->middleware('permission:roles.create');

    Route::get('permissions', 'PermissionsController@index')->name('permissions.index')
        ->middleware('permission:roles.index');

    Route::get('permissions/create', 'PermissionsController@create')->name('permissions.create')
        ->middleware('permission:roles.create');

    Route::put('permissions/{permission}', 'PermissionsController@update')->name('permissions.update')
        ->middleware('permission:roles.edit');

    Route::get('permissions/{permission}', 'PermissionsController@show')->name('permissions.show')
        ->middleware('permission:roles.show');
        
    Route::delete('permissions/{permission}', 'PermissionsController@destroy')->name('permissions.destroy')
        ->middleware('permission:roles.destroy');
        
    Route::get('permissions/{permission}/edit', 'PermissionsController@edit')->name('permissions.edit')
        ->middleware('permission:roles.edit');

});
