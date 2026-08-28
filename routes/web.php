<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home');
Route::livewire('/about', 'pages::about');
Route::livewire('/contact', 'pages::contact');
Route::livewire('/book', 'pages::book');
Route::livewire('/careers', 'pages::careers');

Route::livewire('/service/{slug}', 'pages::service');
Route::livewire('/solution/{slug}', 'pages::solution');
Route::livewire('/industry/{slug}', 'pages::industry');
