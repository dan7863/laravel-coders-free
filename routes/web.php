<?php

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


Route::get('/', function () {

    return "Hola desde la página de inicio22";
    // return view('welcome');
});

Route::get('/contacto', function(){
    return "Hola desde la página de contactos";
})->name('alejandro');

Route::get('/cursos/{id}', function ($id){
    return "BIenvenido al curso con id: $id";
});

//Rutas CRUD

// //Ruta para mostrar el listado de registros
// Route::get('/posts', function(){
//     return "Hola desde la página de posts";
// });

// //Ruta para mostrar un formulario para crear un registro
// Route::get('/posts/create', function(){
//     return "Aquí se mostrará el formulario para crear un post";
// });

// //Ruta para guardar un registro
// Route::post('/posts', function(){
//     return "Aquí se guardará el post";
// });

// //Ruta para mostrar un registro
// Route::get('/posts/{post}', function($post){
//     return "Aquí se mostrará el post $post";
// });


// //Ruta para mostrar un formulario para editar un registro
// Route::get('/posts/{post}/edit', function($post){
//     return "Aquí se mostrará el formulario para editar un post";
// });

// //Ruta para actualizar un registro
// Route::patch('/post/{post}', function($post){
//     return "Aquí se procesará el formulario para editar el post: $post";
// });

// //Ruta para eliminar un registro
// Route::delete('/posts/{post}', function($post){
//     return "Aquí se eliminará el post: $post";
// });

Route::resource('articles', PostController::class)
->parameters(['articles' => 'post'])
->names('posts');
// ->only(['index', 'show']);
// ->except(['create', 'edit']);




