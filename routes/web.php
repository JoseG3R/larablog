<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\PostController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('post', PostController::class);



/*Route::get('/hola/{nombre?}', function ($nombre = "Desconocido") {
    return "Hello {$nombre} come on! <a href='".route("us")."'>here!</a>";
});
Route::get('/nosotros-somos', function ($nombre = "Desconocido") {
    return "Hello {$nombre} We are...";
})->name('us');

Route::get('home/{nombre?}/{apellido?}', function ($nombre = "Juan", $apellido = "Salinas") {

    $frutas = ['banano','manzana','uva','pera'];
    $frutas2 = ['banano','manzana','uva','pera'];

    return view('home',["nombre" => $nombre, "apellido" => $apellido, "frutas" => $frutas, "frutas2" => $frutas2]);
})->name('home');

  Route::get('home/{nombre?}/{apellido?}', function ($nombre = "Juan", $apellido = "Salinas") {
    return view('home')->with('nombre',$nombre)->with('apellido',$apellido);
})->name('home '); */