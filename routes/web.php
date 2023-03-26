<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contacts', function() {
    return "<h1> Daftar Kontak</h1>";
 });

 Route::prefix('admin')->group(function() {
    Route::get('/contacts', function() {
        return "<h1>Daftar Kontak</h1>";
    })->name('contacts.index');
    Route::get('/contacts/create', function() {
        return "<h1>Tambah Kontak Baru</h1>";
    })->name('contacts.create');
    Route::get('/contacts/{id}', function($id) {
        return "Ini Kontak ke-" . $id;
    })->whereNumber('id')->name('contacts.show');
    Route::get('/companies/{name?}', function($name=null) {
        if($name) {
            return "Nama Perusahaan: " . $name;
        } else {
            return "Nama Perusahaan Kosong";
        }
    })->whereAlphaNumeric('name');
 });