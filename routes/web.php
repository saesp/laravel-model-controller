<?php

use Illuminate\Support\Facades\Route;

// Definire una rotta per l'homepage della webapp, inserendo nel file web.php:
// una rotta con url '/'
// che viene gestita dal controller PageController
// più precisamente dalla public function index() all’interno di PageController

use App\Http\Controllers\Folder\MainController;

Route::get('/', [MainController::class, 'index']);