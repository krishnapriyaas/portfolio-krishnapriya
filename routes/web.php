<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')
    ->name('home');

Route::view(
    '/projects/crm-lead-automation',
    'projects.crm'
)->name('projects.crm');

Route::view(
    '/projects/laravel-crm-api',
    'projects.laravel-crm'
)->name('projects.laravel-crm');

Route::view(
    '/projects/ev-charging-api',
    'projects.ev-charging'
)->name('projects.ev-charging');

Route::post(
    '/contact',
    [ContactController::class, 'store']
)->name('contact.store');