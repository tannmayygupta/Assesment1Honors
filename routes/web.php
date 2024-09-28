<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

// Route::get('/', function () {
//     // var_dump("hello");
//     // return view('welcome'); hata denge baadh me padhenge
//     echo("Hello World");
// });

// // waha slash about
// Route::get('/about', function () {
//     // var_dump("hello");
//     // return view('welcome'); hata denge baadh me padhenge
//     echo("My name is sam");
// });

// // ek number le liya
// Route::get('/calculator/{number}', function ($number) {
//     // var_dump("hello");
//     // return view('welcome'); hata denge baadh me padhenge
//     echo($number);
//     echo("<br>My name is sam");
// });

// // for number add two
// Route::get('/calculator/{number1}/{number2}', function ($number1,$number2) {
//     echo("Sum of " . $number1 . " and " . $number2 . " are :" . $number1+$number2);
//     echo("<br>Product of " . $number1 . " and " . $number2 . " are :" . $number1*$number2);

// })-> where([ // webx used here so that integer hi dale user
//     'number1' => '[0-9]+',
//     'number2' => '[0-9]+'

// ]);

// if agar kisi ne interger nhi dala number ke jagah 
// toh hum ci=onstraib=nt add karenge



// name ke liye naya router

// Route::get('/naam/{name1}/{name2}', function ($name1,$name2) {

//     echo('My name is ' . $name1 .' ' . $name2 . '!');


// })->where([
//     'name1', '[a-zA-Z]+',
//     'name2', '[a-zA-Z]+'


// ]);

// agar kuch echo nhi karwana hai url se toh hum vew return karte hai


// Route::get('/naam/{name1}/{name2}', function ($name1 , $name2) {

//     $name = [
//     'name1' => $name1 ,
//     'name2' => $name2 
//     ];

//     return view('greeting');

// })->where([

//     'name1', '[a-zA-Z]+',
//     'name2', '[a-zA-Z]+'

// ]);


Route::get('/', [TodosController::class,'index'])->name('todos.index');

Route::get('/todos/create', [TodosController::class, 'create'])->name('todos.create');