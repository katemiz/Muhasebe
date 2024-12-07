<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CkImgController;





use App\Livewire\Welcome;


use App\Livewire\LwUser;

use App\Livewire\ChangePassword;








use App\Livewire\Documents;
use App\Livewire\DocumentShow;
use App\Livewire\DocumentCreateUpdate;



use App\Livewire\Users;
use App\Livewire\UserShow;
use App\Livewire\UserCreateUpdate;


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


Route::get('/', Welcome::class);

require __DIR__.'/auth.php';

/*
ADMIN
INTERFACE
*/

Route::middleware(['auth'])->group(function () {


    // USERS
    // *****************************************************************************
    Route::get('/usrs', Users::class);
    Route::get('/usrs/create', UserCreateUpdate::class);
    Route::post('/usrs', UserCreateUpdate::class);
    Route::get('/usrs/{id}', UserShow::class);
    Route::get('/usrs/{id}/edit', UserCreateUpdate::class);
    Route::patch('/usrs/{id}', UserCreateUpdate::class);
    Route::delete('/usrs/{id}', UserCreateUpdate::class);





                        // CHANGE PASSWORDS
                        Route::get('/admin-users/{action}/{id?}', LwUser::class);
                        Route::get('/profile', ChangePassword::class);







    // DOCUMENTS
    // *****************************************************************************
    Route::get('/records', Documents::class);
    Route::get('/records/create', DocumentCreateUpdate::class);
    Route::post('/records', DocumentCreateUpdate::class);
    Route::get('/records/{id}', DocumentShow::class);
    Route::get('/records/{id}/edit', DocumentCreateUpdate::class);
    Route::patch('/records/{id}', DocumentCreateUpdate::class);
    Route::delete('/records/{id}', DocumentCreateUpdate::class);



});
