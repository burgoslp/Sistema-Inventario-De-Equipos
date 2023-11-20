<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\brandsController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\reportesController;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\conectoresController;
use App\Http\Controllers\conexionesController;
use App\Http\Controllers\historicosController;
use App\Http\Controllers\parametrosController;
use App\Http\Controllers\componentesController;
use App\Http\Controllers\monitorSizeController;
use App\Http\Controllers\estadisticasController;
use App\Http\Controllers\workstationsController;
use App\Http\Controllers\DashboardTecnicoController;
use App\Http\Controllers\monitorResolutionsController;
use App\Http\Controllers\DashboardAdministradorController;
use App\Http\Controllers\keyboardModelsController;
use App\Http\Controllers\keyboardSizesController;
use App\Http\Controllers\monitorFramesController;

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

//rutas para los usuarios

//rutas para los usuarios con rol administrador
Route::get('/Administrador',[DashboardAdministradorController::class,'index'])->name('administrador.index');

//rutas para los usuarios con el rol tecnico
Route::get('/Tecnico',[DashboardTecnicoController::class,'index'])->name('tecnico.index');

//rutas para los parametros -> solo el administrador puede acceder
Route::get('/parametros',[parametrosController::class,'index'])->name('parametros.index');
Route::get('/brands',[brandsController::class,'index'])->name('brands.index');
Route::get('/brands/create',[brandsController::class,'create'])->name('brands.create');
Route::get('/brands/show/{id}',[brandsController::class,'show'])->name('brands.show');
Route::put('/brands',[brandsController::class,'update'])->name('brands.update');
Route::delete('/brands',[brandsController::class,'delete'])->name('brands.delete');
Route::post('/brands',[brandsController::class,'store'])->name('brands.store');
Route::get('/conectores',[conectoresController::class,'index'])->name('conectores.index');
Route::get('/conectores/create',[conectoresController::class,'create'])->name('conectores.create');
Route::get('/conectores/show/{id}',[conectoresController::class,'show'])->name('conectores.show');
Route::put('/conectores',[conectoresController::class,'update'])->name('conectores.update');
Route::delete('/conectores',[conectoresController::class,'delete'])->name('conectores.delete');
Route::post('/conectores',[conectoresController::class,'store'])->name('conectores.store');
Route::get('/conexiones',[conexionesController::class,'index'])->name('conexiones.index');
Route::get('/conexiones/create',[conexionesController::class,'create'])->name('conexiones.create');
Route::get('/conexiones/show/{id}',[conexionesController::class,'show'])->name('conexiones.show');
Route::put('/conexiones',[conexionesController::class,'update'])->name('conexiones.update');
Route::delete('/conexiones',[conexionesController::class,'delete'])->name('conexiones.delete');
Route::post('/conexiones',[conexionesController::class,'store'])->name('conexiones.store');
Route::get('/monitor/resolutions',[monitorResolutionsController::class,'index'])->name('monitorResolutions.index');
Route::get('/monitor/resolutions/create',[monitorResolutionsController::class,'create'])->name('monitorResolutions.create');
Route::get('/monitor/resolutions/show/{id}',[monitorResolutionsController::class,'show'])->name('monitorResolutions.show');
Route::put('/monitor/resolutions',[monitorResolutionsController::class,'update'])->name('monitorResolutions.update');
Route::delete('/monitor/resolutions',[monitorResolutionsController::class,'delete'])->name('monitorResolutions.delete');
Route::post('/monitor/resolutions',[monitorResolutionsController::class,'store'])->name('monitorResolutions.store');
Route::get('/monitor/frames',[monitorFramesController::class,'index'])->name('monitorFrames.index');
Route::get('/monitor/frames/create',[monitorFramesController::class,'create'])->name('monitorFrames.create');
Route::get('/monitor/frames/show/{id}',[monitorFramesController::class,'show'])->name('monitorFrames.show');
Route::put('/monitor/frames',[monitorFramesController::class,'update'])->name('monitorFrames.update');
Route::delete('/monitor/frames',[monitorFramesController::class,'delete'])->name('monitorFrames.delete');
Route::post('/monitor/frames',[monitorFramesController::class,'store'])->name('monitorFrames.store');
Route::get('/monitor/sizes',[monitorSizeController::class,'index'])->name('monitorSizes.index');
Route::get('/monitor/sizes/create',[monitorSizeController::class,'create'])->name('monitorSizes.create');
Route::get('/monitor/sizes/show/{id}',[monitorSizeController::class,'show'])->name('monitorSizes.show');
Route::put('/monitor/sizes',[monitorSizeController::class,'update'])->name('monitorSizes.update');
Route::delete('/monitor/sizes',[monitorSizeController::class,'delete'])->name('monitorSizes.delete');
Route::post('/monitor/sizes',[monitorSizeController::class,'store'])->name('monitorSizes.store');


Route::get('/keyboard/models',[keyboardModelsController::class,'index'])->name('keyboardModels.index');
Route::get('/keyboard/models/create',[keyboardModelsController::class,'create'])->name('keyboardModels.create');
Route::get('/keyboard/models/show/{id}',[keyboardModelsController::class,'show'])->name('keyboardModels.show');
Route::put('/keyboard/models',[keyboardModelsController::class,'update'])->name('keyboardModels.update');
Route::delete('/keyboard/models',[keyboardModelsController::class,'delete'])->name('keyboardModels.delete');
Route::post('/keyboard/models',[keyboardModelsController::class,'store'])->name('keyboardModels.store');

Route::get('/keyboard/sizes',[keyboardSizesController::class,'index'])->name('keyboardSizes.index');
Route::get('/keyboard/sizes/create',[keyboardSizesController::class,'create'])->name('keyboardSizes.create');
Route::get('/keyboard/sizes/show/{id}',[keyboardSizesController::class,'show'])->name('keyboardSizes.show');
Route::put('/keyboard/sizes',[keyboardSizesController::class,'update'])->name('keyboardSizes.update');
Route::delete('/keyboard/sizes',[keyboardSizesController::class,'delete'])->name('keyboardSizes.delete');
Route::post('/keyboard/sizes',[keyboardSizesController::class,'store'])->name('keyboardSizes.store');

//rutas para los usuarios -> solo el administrador puede acceder
Route::get('/usuarios',[usuariosController::class,'index'])->name('usuarios.index');
Route::get('/usuarios/create',[usuariosController::class,'create'])->name('usuarios.create');
Route::get('/usuarios/show/{id}',[usuariosController::class,'show'])->name('usuarios.show');
Route::put('/usuarios',[usuariosController::class,'update'])->name('usuarios.update');
Route::delete('/usuarios',[usuariosController::class,'delete'])->name('usuarios.delete');
Route::post('/usuarios',[usuariosController::class,'store'])->name('usuarios.store');

//rutas para las workstation -> el administrador puede acceder y el tecnico también solo a metodos especificos
Route::get('/workstations',[workstationsController::class,'index'])->name('workstations.index');

//rutas para los componentes  -> el administrador puede acceder y el tecnico también solo a metodos especificos
Route::get('/componentes',[componentesController::class,'index'])->name('componentes.index');

//rutas para los reportes  -> el administrador puede acceder y el tecnico
Route::get('/reportes',[reportesController::class,'index'])->name('reportes.index');

//rutas para las estadisticas  -> solo el administrador puede acceder
Route::get('/estadisticas',[estadisticasController::class,'index'])->name('estadisticas.index');

//rutas para las historicos  -> solo el administrador puede acceder
Route::get('/historicos',[historicosController::class,'index'])->name('historicos.index');

//rutas para el login
Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name("login");
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name("logout");