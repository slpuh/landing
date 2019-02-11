<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function(){

    Route::match(['get','post'],'/',['uses'=>'IndexController@execute'])->name('home');
    Route::get('/page/{alias}', ['uses'=>'PageController@execute'])->name('page');
    
    Route::auth();   
    
});

//admin/service
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
    
    //admin
    Route::get('/', function(){
        
        if(view()->exists('admin.index')){
            $data=['title'=>'Панель администратора'];
            return view('admin.index',$data);
                
        }
        
    });
    //admin/pages
    Route::group(['prefix'=>'pages', 'middleware'=>'auth'], function(){
        //admin/pages
        Route::get('/', ['uses'=>'PagesController@execute'])->name('pages');
        //admin/pages/add
        Route::match(['get','post'],'/add',['uses'=>'PagesAddController@execute'])->name('pagesAdd');
        //admin/edit/2
        Route::match(['get','post','delete'],'/edit/{page}',['uses'=>'PagesEditController@execute'])->name('pagesEdit');
    });
    
    //admin/portfolio
    Route::group(['prefix'=>'portfolios'], function(){
        //admin/portfolio
        Route::get('/', ['uses'=>'PortfolioController@execute'])->name('portfolio');
        //admin/portfolio/add
        Route::match(['get','post'],'/add',['uses'=>'PortfolioAddController@execute'])->name('portfolioAdd');
        //admin/edit/2
        Route::match(['get','post','delete'],'/edit/{portfolio}',['uses'=>'PortfolioEditController@execute'])->name('portfolioEdit');
    });
    
    //admin/services
    Route::group(['prefix'=>'services'], function(){
        //admin/services
        Route::get('/', ['uses'=>'ServiceController@execute'])->name('services');
        //admin/services/add
        Route::match(['get','post'],'/add',['uses'=>'ServiceAddController@execute'])->name('serviceAdd');
        //admin/edit/2
        Route::match(['get','post','delete'],'/edit/{service}',['uses'=>'ServiceEditController@execute'])->name('serviceEdit');
    });
    
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
