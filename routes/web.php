<?php

use Illuminate\Support\Facades\Route;
use  App\Models\{UserData,User};
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

Require __DIR__ .'/site/routes.php';
Require __DIR__ .'/authentication/routes.php';

Route::get("/data",function(){
    try {
        //code...

        $data= UserData::create([
        'name' => "Domingos",
        'birthday' => "1990-09-17",
        'province' =>"Benguela",
        'municipality' =>"Benguela",
        'street' =>"Benfica",
        'nif' =>"0048856BA040",
        'position' =>"CEO",
        'phone' =>"932906020"
        ]);

        

    User::create([
        "email"=>"fortunatosnat@gmail.com",
        "password"=> \Hash::make("for06"),
        "profiletype"=>"admin",
        "user_data_id"=> $data["id"]
    ]);

    dd("dados salvos com sucesso");


    } catch (\Throwable $th) {
      dd($th->getMessage()); 
    }

});