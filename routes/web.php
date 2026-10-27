<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ITInventoryController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\GraphQLController;

Route::get('/test-db2i', function () {

    $pdo = new PDO(
        "odbc:AS400_DSN",
        "AXPGMR",
        "AXPGMR",
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );

    $stmt = $pdo->query("SELECT CURRENT DATE FROM SYSIBM.SYSDUMMY1");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
});
//Auth
Route::get(uri:'login',action: [LoginController::class, 'login_form'])->name(name:'login')->middleware('guest');
Route::post(uri:'login',action: [LoginController::class, 'authenticate'])->middleware('guest');;
Route::any('/logout',action: [LogoutController::class, 'logout'])->name(name:'logout')->middleware('auth'); 

//Menu
Route::get('/',[MenuController::class, 'index'])->name(name:'main')->middleware('auth');
//IT Inventory
Route::prefix('/it-inventory')->group(function () {
    Route::get('/report', [ITInventoryController::class, 'report_it_inventory'])->name('report.itinventory')->middleware('auth');
    Route::any('/report/responsebycode/{code}', [ITInventoryController::class, 'report_it_inventory_responsebycode'])->name('report.itinventory.responsebycode')->middleware('auth');
    Route::any('/getdata', [ITInventoryController::class, 'report_it_inventory_getdata'])->name('report.itinventory.getdata')->middleware('auth');
});

Route::get('/select2/plant', [ITInventoryController::class, 'select2Plant'])
    ->name('plant.select2');

Route::prefix('/system')->group(function () {
    //user
    Route::get('/user', [SystemController::class, 'user'])->name('system.user')->middleware('auth');
    Route::get('/user-profile', [SystemController::class, 'userprofile'])->name('system.userprofile')->middleware('auth');
    Route::post('/user-crud', [SystemController::class, 'user_crud'])->name('system.user.crud')->middleware('auth');
    Route::any('/user/execbycode/{code}', [SystemController::class, 'user_execbycode'])->name('system.user.execbycode')->middleware('auth');

});



Route::get('/countries', [GraphQLController::class, 'index']);
Route::get('/countries/{code}', [GraphQLController::class, 'show'])->name('countries.show');

     






