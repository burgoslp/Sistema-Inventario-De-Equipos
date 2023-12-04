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
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\monitorSizeController;
use App\Http\Controllers\estadisticasController;
use App\Http\Controllers\workstationsController;
use App\Http\Controllers\DashboardTecnicoController;
use App\Http\Controllers\monitorResolutionsController;
use App\Http\Controllers\DashboardAdministradorController;
use App\Http\Controllers\DiskController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\keyboardModelsController;
use App\Http\Controllers\keyboardSizesController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\monitorFramesController;
use App\Http\Controllers\MouseController;
use App\Http\Controllers\NotebookController;
use App\Http\Controllers\ProcessorController;
use App\Http\Controllers\qrcodeController;
use App\Http\Controllers\RamController;

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

//rutas para los componentes  -> el administrador puede acceder y el tecnico también solo a metodos especificos
Route::get('/componentes',[componentesController::class,'index'])->name('componentes.index');
Route::get('/monitores',[MonitorController::class,'index'])->name('monitores.index');
Route::get('/monitores/create',[MonitorController::class,'create'])->name('monitores.create');
Route::get('/monitores/show/{id}',[MonitorController::class,'show'])->name('monitores.show');
Route::put('/monitores',[MonitorController::class,'update'])->name('monitores.update');
Route::delete('/monitores',[MonitorController::class,'delete'])->name('monitores.delete');
Route::post('/monitores',[MonitorController::class,'store'])->name('monitores.store');
Route::get('/teclados',[KeyboardController::class,'index'])->name('teclados.index');
Route::get('/teclados/create',[KeyboardController::class,'create'])->name('teclados.create');
Route::get('/teclados/show/{id}',[KeyboardController::class,'show'])->name('teclados.show');
Route::put('/teclados',[KeyboardController::class,'update'])->name('teclados.update');
Route::delete('/teclados',[KeyboardController::class,'delete'])->name('teclados.delete');
Route::post('/teclados',[KeyboardController::class,'store'])->name('teclados.store');
Route::get('/ratones',[MouseController::class,'index'])->name('ratones.index');
Route::get('/ratones/create',[MouseController::class,'create'])->name('ratones.create');
Route::get('/ratones/show/{id}',[MouseController::class,'show'])->name('ratones.show');
Route::put('/ratones',[MouseController::class,'update'])->name('ratones.update');
Route::delete('/ratones',[MouseController::class,'delete'])->name('ratones.delete');
Route::post('/ratones',[MouseController::class,'store'])->name('ratones.store');
Route::get('/ram',[RamController::class,'index'])->name('rams.index');
Route::get('/ram/create',[RamController::class,'create'])->name('rams.create');
Route::get('/ram/show/{id}',[RamController::class,'show'])->name('rams.show');
Route::put('/ram',[RamController::class,'update'])->name('rams.update');
Route::delete('/ram',[RamController::class,'delete'])->name('rams.delete');
Route::post('/ram',[RamController::class,'store'])->name('rams.store');
Route::get('/disk',[DiskController::class,'index'])->name('disks.index');
Route::get('/disk/create',[DiskController::class,'create'])->name('disks.create');
Route::get('/disk/show/{id}',[DiskController::class,'show'])->name('disks.show');
Route::put('/disk',[DiskController::class,'update'])->name('disks.update');
Route::delete('/disk',[DiskController::class,'delete'])->name('disks.delete');
Route::post('/disk',[DiskController::class,'store'])->name('disks.store');
Route::get('/processors',[ProcessorController::class,'index'])->name('processors.index');
Route::get('/processors/create',[ProcessorController::class,'create'])->name('processors.create');
Route::get('/processors/show/{id}',[ProcessorController::class,'show'])->name('processors.show');
Route::put('/processors',[ProcessorController::class,'update'])->name('processors.update');
Route::delete('/processors',[ProcessorController::class,'delete'])->name('processors.delete');
Route::post('/processors',[ProcessorController::class,'store'])->name('processors.store');
Route::get('/ordenadores',[ComputerController::class,'index'])->name('computers.index');
Route::get('/ordenadores/create',[ComputerController::class,'create'])->name('computers.create');
Route::get('/ordenadores/show/{id}',[ComputerController::class,'show'])->name('computers.show');
Route::put('/ordenadores',[ComputerController::class,'update'])->name('computers.update');
Route::delete('/ordenadores',[ComputerController::class,'delete'])->name('computers.delete');
Route::post('/ordenadores',[ComputerController::class,'store'])->name('computers.store');
Route::get('/laptops',[NotebookController::class,'index'])->name('laptops.index');
Route::get('/laptops/create',[NotebookController::class,'create'])->name('laptops.create');
Route::get('/laptops/show/{id}',[NotebookController::class,'show'])->name('laptops.show');
Route::put('/laptops',[NotebookController::class,'update'])->name('laptops.update');
Route::delete('/laptops',[NotebookController::class,'delete'])->name('laptops.delete');
Route::post('/laptops',[NotebookController::class,'store'])->name('laptops.store');

//rutas para las imagenes qr -> el administrador puede acceder y el tecnico también 
Route::get('/qrcodes/show/{componente}/{name}',[qrcodeController::class,'show'])->name('qrcodes.show');

//rutas para las workstation -> el administrador puede acceder y el tecnico también solo a metodos especificos
Route::get('/equipos',[EquipmentController::class,'index'])->name('equipments.index');
Route::get('/equipos/create',[EquipmentController::class,'create'])->name('equipments.create');
Route::get('/equipos/show/{id}',[EquipmentController::class,'show'])->name('equipments.show');
Route::put('/equipos',[EquipmentController::class,'update'])->name('equipments.update');
Route::delete('/equipos',[EquipmentController::class,'delete'])->name('equipments.delete');
Route::post('/equipos',[EquipmentController::class,'store'])->name('equipments.store');


//rutas para los reportes  -> el administrador puede acceder y el tecnico
Route::get('/reportes',[reportesController::class,'index'])->name('reportes.index');
Route::post('/reportes',[reportesController::class,'show'])->name('reportes.show');

//rutas para las estadisticas  -> solo el administrador puede acceder
Route::get('/estadisticas',[estadisticasController::class,'index'])->name('estadisticas.index');

//rutas para las historicos  -> solo el administrador puede acceder
Route::get('/historicos',[historicosController::class,'index'])->name('historicos.index');

//rutas para el login
Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name("login");
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name("logout");