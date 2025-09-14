<?php

use App\Http\Controllers\ArsipController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return redirect()->route('arsip.index');
});

Route::controller(ArsipController::class)->group(function () {
    Route::get('arsip', 'index')->name('arsip.index');
    Route::get('arsip/create', 'create')->name('arsip.create');
    Route::post('arsip', 'store')->name('arsip.store');
    Route::get('arsip/{arsip}', 'show')->name('arsip.show');
    Route::get('arsip/{arsip}/edit', 'edit')->name('arsip.edit');
    Route::put('arsip/{arsip}', 'update')->name('arsip.update');
    Route::delete('arsip/{arsip}', 'destroy')->name('arsip.destroy');
    Route::get('arsip/search', 'search')->name('arsip.search');
    Route::get('arsip/{arsip}/download', 'download')->name('arsip.download');
});

Route::controller(KategoriController::class)->group(function () {
    Route::get('kategori', 'index')->name('kategori.index');
    Route::get('kategori/create', 'create')->name('kategori.create');
    Route::post('kategori', 'store')->name('kategori.store');
    Route::get('kategori/{kategori}/edit', 'edit')->name('kategori.edit');
    Route::put('kategori/{kategori}', 'update')->name('kategori.update');
    Route::delete('kategori/{kategori}', 'destroy')->name('kategori.destroy');
});

Route::get('about', [AboutController::class, 'index'])->name('about.index');