<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('accounter.tabianresult');
});

Route::get('/edit', function () {
    return view('accounter.edit');
});

Route::get('/import', function () {
    return view('accounter.import');
});

Route::get('/insert', function () {
    return view('accounter.insert');
});

Route::get('/delete', function () {
    return view('accounter.delete');
});


Route::get('/subject', function () {
    return view('teacher.editsubject');
});
Route::get('/result', function () {
    return view('teacher.result');
});
Route::get('/registersubject', function () {
    return view('teacher.registersubject');
});
Route::get('/registerclass', function () {
    return view('teacher.registerclass');
});
Route::get('/tablelast', function () {
    return view('teacher.tablelast');
});
Route::get('/แก้ไขห้อง', function () {
    return view('teacher.แก้ไขห้อง');
});
Route::get('/เพิ่มห้อง', function () {
    return view('teacher.เพิ่มห้อง');
});
Route::get('/สถานะ', function () {
    return view('teacher.สถานะ');
});



Route::get('/login', function () {
    return view('login');
});