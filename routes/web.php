<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TestimonialsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('site.pages.index');
});


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::controller(AdminController::class)->group(function(){
        Route::get('admin/logout', 'destroy')->name('admin.logout');
        Route::get('admin/profile', 'Profile')->name('admin.profile');
        Route::get('admin/profile/edit', 'EditProfile')->name('edit.profile');
        Route::post('admin/profile/store', 'StoreProfile')->name('store.profile');
    
        Route::get('admin/profile/alterarSenha', 'ChangePassword')->name('admin.alterarSenha');
        Route::post('admin/profile/updatePassword', 'UpdatePassword')->name('updatePassword');
    
        Route::get('admin/profile/description', 'ProfileDescription')->name('admin.profile.description');
        Route::post('admin/profile/description', 'ProfileDescriptionStore')->name('store.profile.about');
    });

    Route::get('admin/testemunhos', [TestimonialsController::class, 'index'])->name('testimonials');
    Route::post('admin/testemunho/editar/{id}', [TestimonialsController::class, 'edit'])->name('testimonial.edit');
    Route::get('admin/testemunho/remover/{id}', [TestimonialsController::class, 'destroy'])->name('testimonials.delete');


    Route::get('admin/contactos', [InfoController::class, 'index'])->name('contacts');
    Route::post('admin/contactos/add', [InfoController::class, 'store'])->name('store.contacts');
    
    Route::get('admin/serviços', [ServicesController::class, 'index'])->name('services');
    Route::get('admin/serviços/add',[ServicesController::class, 'create'])->name('add.service');
    Route::get('admin/serviços/remove/{id}',[ServicesController::class, 'destroy'])->name('service.remove');
    Route::post('admin/serviços/add',[ServicesController::class, 'store'])->name('store.service');
    
    Route::get('admin/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
    Route::get('admin/portfolio/add',[PortfolioController::class, 'create'])->name('add.portfolio');
    Route::post('admin/portfolio/add',[PortfolioController::class, 'store'])->name('store.portfolio');
    
    Route::get('admin/posts', [PostsController::class, 'index'])->name('posts');
    Route::get('admin/posts/add',[PostsController::class, 'create'])->name('add.post');
    Route::post('admin/post/add',[PostsController::class, 'store'])->name('store.post');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

 
require __DIR__.'/auth.php';
