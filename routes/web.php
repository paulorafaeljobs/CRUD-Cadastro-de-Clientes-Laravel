<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerCadastros;

Route::get('/cadastro',[ControllerCadastros::class,'CreateCadastro']);
Route::get('/',[ControllerCadastros::class,'Home']);
Route::post('/create',[ControllerCadastros::class,'Create']);
Route::get('/del/{id}',[ControllerCadastros::class,'Delete']);
Route::get('/editar/{id}',[ControllerCadastros::class,'UpdatePage']);
Route::post('/update',[ControllerCadastros::class,'Update']);