<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;





Route::controller(CrudController::class)->group(function () {
    Route::get('/','get')->name('get');
    Route::get("/view/{id}","view")->name('view');     
    Route::get("/add","add")->name('add');          
    Route::post("/store","store")->name('store');   // Store Product
    Route::get('/edit/{id}','edit')->name('edit');  //edit product
    Route::post("/update/{id}","update")->name('update'); // product edit update
    Route::get("/delete/{id}","delete")->name('delete');

   
     // product delete  
});




// Route::get("/",[CrudController::class,"get"]);
// Route::post("/store",[CrudController::class,"store"]);