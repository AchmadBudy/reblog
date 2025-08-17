<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Front\Home::class)
    ->name('home');
Route::get('/blogs', App\Livewire\Front\Blogs::class)
    ->name('blogs');
Route::get('/blogs/{post:slug}', App\Livewire\Front\BlogDetail::class)
    ->name('blog-detail');
Route::get('/projects', App\Livewire\Front\Projects::class)
    ->name('projects');
Route::get('/projects/{project:slug}', App\Livewire\Front\ProjectDetail::class)
    ->name('project-detail');
Route::get('/contact', App\Livewire\Front\Contact::class)
    ->name('contact');
