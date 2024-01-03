<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', HomeController::class);

Route::get('/contacto', function(){
    return "Hola desde la página de contactos";
})->name('alejandro');

Route::get('/cursos/{id}', function ($id){
    return "BIenvenido al curso con id: $id";
});

//Rutas CRUD

//Ruta para mostrar el listado de registros

Route::prefix('posts')->name('posts.')->controller(PostController::class)->group(function(){

    Route::get('/', 'index')->name('index');
    
    //Ruta para mostrar un formulario para crear un registro
    Route::get('/create', 'create')->name('create');
    
    //Ruta para guardar un registro
    Route::post('/', 'store')->name('store');
    
    //Ruta para mostrar un registro
    Route::get('/{post}', 'show')->name('show');
    
    //Ruta para mostrar un formulario para editar un registro
    Route::get('/{post}/edit', 'edit')->name('edit');
    
    //Ruta para actualizar un registro
    Route::patch('/{post}', 'update')->name('update');
    
    //Ruta para eliminar un registro
    Route::delete('/{post}', 'destroy')->name('destroy');
});



// Route::resource('articles', PostController::class)
// ->parameters(['articles' => 'post'])
// ->names('posts');
// ->only(['index', 'show']);
// ->except(['create', 'edit']);




