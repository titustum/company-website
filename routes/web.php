<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/about', 'pages::about')->name('about');
Route::livewire('/contact', 'pages::contact')->name('contact');
Route::livewire('/book', 'pages::book')->name('book');
Route::livewire('/careers', 'pages::careers')->name('careers');
Route::livewire('/team', 'pages::team')->name('team');

Route::livewire('/service/{slug}', 'pages::service')->name('service.show');;
Route::livewire('/solution/{slug}', 'pages::solution')->name('solution.show');;
Route::livewire('/industry/{slug}', 'pages::industry')->name('industry.show');
Route::livewire('/blogs', 'pages::blogs')->name('blogs.index');;
Route::livewire('/blog/{slug}', 'pages::blog')->name('blog.show');
Route::livewire('/webinars', 'pages::webinars')->name('webinars.index');
Route::livewire('/webinar/{slug}', 'pages::webinar')->name('webinar.show');
Route::livewire('/webinar/register/{slug}', 'pages::webinar-registration')->name('webinar.register');
