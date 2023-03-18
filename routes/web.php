<?php

//namespace App\Http\Controllers\Wo;
//namespace App\Http\Controllers\Inventaris;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Asa\UatController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Wo\WoInController;
use App\Http\Controllers\Wo\WoOutController;
use App\Http\Controllers\Asa\AnalisaController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\TroubleshootController;
use App\Http\Controllers\Inventaris\PcController;
use App\Http\Controllers\Inventaris\OtgController;
use App\Http\Controllers\Asa\ImprovementController;
use App\Http\Controllers\Inventaris\PcposController;
use App\Http\Controllers\Inventaris\LaptopController;
use App\Http\Controllers\Inventaris\MobileController;
use App\Http\Controllers\Inventaris\PrinterController;


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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//route resource
Route::resource('troubleshoot', TroubleshootController::class);
//route maintenance
Route::resource('maintenance', MaintenanceController::class);
//route project
Route::resource('project', ProjectController::class);
//route WO In
Route::resource('woin', WoInController::class);
//route WO Out
Route::resource('woout', WoOutController::class);
//route Group Inventaris
Route::prefix('inventaris')->group(function () {
    // route laptop
    Route::resource('laptop', LaptopController::class);
    // route mobile
    Route::resource('mobile', MobileController::class);
    // route otg
    Route::resource('otg', OtgController::class);
    //route pc
    Route::resource('pc', PcController::class);
    //route pc pos
    Route::resource('pcpos', PcposController::class);
    //route printer
    Route::resource('printer', PrinterController::class);


});
//route Group Administrasi Sistem dan Aplikasi
Route::prefix('asa')->group(function () {
    // route analisa
    Route::resource('analisa', AnalisaController::class);
    // route uat
    Route::resource('uat', UatController::class);
    // route improvement
    Route::resource('improvement', ImprovementController::class);

});


