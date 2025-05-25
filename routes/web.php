<?php

use App\Livewire\CreateCatalogue;
use App\Livewire\UpdateCatalogue;
Use App\Livewire\Catalogues;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/catalogues/create', CreateCatalogue::class)
        ->name('catalogues.create');
    Route::get('/catalogues/{catalogue}/update', UpdateCatalogue::class)
        ->name('catalogues.update');
    Route::get('/catalogues', Catalogues::class)
        ->name('catalogues');
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
