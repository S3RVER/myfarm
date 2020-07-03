<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::middleware(['auth','checkPermission'])->group(function () {
    Route::get('/','HomeController@index')->name('home');

    Route::resource('market-categories', 'MarketCategoryController');
    Route::resource('market-products', 'MarketProductController');
    Route::resource('diseases.items', 'DiseaseItemController');
    Route::resource('general-tips', 'GeneralTipController');
    Route::resource('personnel', 'PersonnelController');
    Route::resource('diseases', 'DiseaseCategoryController');
    Route::resource('invoices', 'InvoiceController');
    Route::resource('users', 'UsersController');
    Route::resource('rbac', 'RolesController');
    Route::resource('faq', 'FaqController');

    Route::get('citrus-computational-recommendations', 'CitrusComputationalRecommendationsController@index')->name('citrus_c_r.index');
    Route::post('citrus-computational-recommendations', 'CitrusComputationalRecommendationsController@calculate')->name('citrus_c_r_.calculate');
});
