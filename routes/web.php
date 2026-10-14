<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'))->name('home');
Route::get('/tattoo', fn() => view('tattoo'))->name('tattoo');
Route::get('/piercing', fn() => view('piercing'))->name('piercing');
Route::get('/galerie', fn() => view('galerie'))->name('galerie');
Route::get('/studio', fn() => view('studio'))->name('studio');
Route::get('/anfrage', fn() => view('anfrage'))->name('anfrage');
Route::get('/kontakt', fn() => view('kontakt'))->name('kontakt');

Route::get('/agb', fn() => view('agb'))->name('agb');
Route::get('/impressum', fn() => view('impressum'))->name('impressum');
Route::get('/datenschutz', fn() => view('datenschutz'))->name('datenschutz');
Route::get('/faq', fn() => view('faq'))->name('faq');
Route::get('/sitemap', fn() => view('sitemap'))->name('sitemap');
