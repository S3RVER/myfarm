<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::middleware(['auth','checkPermission'])->group(function () {
    Route::get('/','HomeController@index')->name('home');
    Route::resource('market-categories', 'MarketCategoryController');
    Route::resource('market-products', 'MarketProductController');
    Route::resource('invoices', 'InvoiceController');
    Route::resource('users', 'UsersController');
    Route::resource('personnel', 'PersonnelController');
    Route::resource('rbac', 'RolesController');
    Route::get('computational_recommendations', 'ComputationalRecommendationsController@index')->name('computational_recommendations.index');
    Route::resource('categories', 'CategoryController');
    Route::resource('faq', 'FaqController');
    Route::resource('general-tips', 'GeneralTipController');
    Route::resource('diseases', 'DiseaseCategoryController');
    Route::resource('diseases.items', 'DiseaseItemController');

    Route::name('diseases.')->prefix('diseases')->group(function (){

    });
});
