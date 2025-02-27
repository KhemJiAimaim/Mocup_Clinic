<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/pages/home/home');
});

Route::group(['prefix' => 'about'], function () {
    Route::get('/', function () {
        return view('/pages/about/about');
    })->name('about.index');
});

Route::group(['prefix' => 'service'], function () {
    Route::get('/', function () {
        return view('/pages/Services/Services');
    })->name('service.index');

    Route::get('/service-detail/{id}', function ($id) {
        return view('pages.Services.detail', ['id' => (int)$id]);
    })->name('service.detail');
    
    
});

Route::group(['prefix' => 'doctor'], function () {
    Route::get('/', function () {
        return view('/pages/doctor/doctor');
    })->name('doctor.index');

    Route::get('/doctor-detail/{id}', function ($id) {
        return view('pages.doctor.detail', ['id' => (int)$id]);
    })->name('doctor.detail');
    
});

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', function () {
        return view('/pages/blog/blog');
    })->name('blog.index');

    Route::get('/blog-detail/{id}', function ($id) {
        return view('pages.blog.detail', ['id' => (int)$id]);
    })->name('blog.detail');
});

Route::group(['prefix' => 'contact'], function () {
    Route::get('/', function () {
        return view('/pages/contact/contact');
    })->name('blog.index');
});

Route::group(['prefix' => 'contact'], function () {
    Route::get('/', function () {
        return view('/pages/contact/contact');
    })->name('contact.index');
});

Route::group(['prefix' => 'FQA'], function () {
    Route::get('/', function () {
        return view('/pages/FQA/FQA');
    })->name('FQA.index');
});

Route::group(['prefix' => 'terms'], function () {
    Route::get('/', function () {
        return view('/pages/terms/terms');
    })->name('terms.index');
});

Route::group(['prefix' => 'privacy'], function () {
    Route::get('/', function () {
        return view('/pages/privacy/privacy');
    })->name('privacy.index');
});