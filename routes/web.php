<?php

use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashBoardController;


Route::get('home',[HomeController::class, 'home']);
Route::get('blog',[HomeController::class, 'blog']);
// Route::get('blog/{id}', [BlogController::class, 'blog_details']);

Route::get('about',[HomeController::class, 'about']);
Route::get('services',[HomeController::class, 'services']);
Route::get('portfolio',[HomeController::class, 'portfolio']);
Route::get('team',[HomeController::class, 'team']);
Route::get('contact',[HomeController::class, 'contact']);
Route::get('hero',[HomeController::class, 'hero']);
//auth url
Route::get('login',[AuthController::class, 'login']);
Route::post('login',[AuthController::class, 'auth_login']);
Route::get('register',[AuthController::class, 'register']);
Route::post('register',[AuthController::class, 'create_user']);
Route::get('forgot', [AuthController::class, 'forgot']);
Route::post('forgot', [AuthController::class, 'forgot_password']);
Route::get('reset/{token}', [AuthController::class, 'reset']);
Route::post('reset/{token}', [AuthController::class, 'reset_password']);



Route::get('logout', [AuthController::class, 'logout']);

//email verify url
Route::get('verify/{token}',[AuthController::class, 'verify']);


Route::group(['middleware' => 'admin'], function(){
    //middlware verification auth dash
    Route::get('panel/dashboard',[DashBoardController::class, 'dashboard']);
  //middlaware url  users
    Route::get('panel/user/list',[UserController::class, 'user']);
    Route::get('panel/user/add',[UserController::class, 'addUser']);
    Route::post('panel/user/add',[UserController::class, 'insertUser']);
    Route::get('panel/user/edit/{id}',[UserController::class, 'editUser']);
    Route::post('panel/user/edit/{id}',[UserController::class, 'updateUser']);
    Route::get('panel/user/delete/{id}',[UserController::class, 'deleteUser']);
    Route::get('skills',[UserController::class,'userSkill']);


     //url for category
     Route::get('panel/category/list',[CategoryController::class, 'category']);
     Route::get('panel/category/add',[CategoryController::class, 'add_category']);
     Route::post('panel/category/add',[CategoryController::class, 'insert_category']);
     Route::get('panel/category/edit/{id}',[CategoryController::class, 'edit_category']);
     Route::post('panel/category/edit/{id}',[CategoryController::class, 'update_category']);
     Route::get('panel/category/delete/{id}',[CategoryController::class, 'delete_category']);


     //url for blog
     Route::get('panel/blog/list',[BlogController::class, 'blog']);
     Route::get('panel/blog/add',[BlogController::class, 'add_blog']);
     Route::post('panel/blog/add',[BlogController::class, 'insert_blog']);
     Route::get('panel/blog/edit/{id}',[BlogController::class, 'edit_blog']);
     Route::post('panel/blog/edit/{id}',[BlogController::class, 'update_blog']);
     Route::get('panel/blog/delete/{id}',[BlogController::class, 'delete_blog']);


});

  // Route::group(['middleware' => 'jobseekers'], function(){
  //   Route::get('applicant/home', [Jobs])
  // });

  Route::group(['middleware' => 'companies'], function(){
    Route::get('companies/companyHome', [CompanyController::class, 'index']);
    Route::get('companies/job/create', [CompanyController::class, 'create']);
    Route::get('companies/job/add', [CompanyController::class, 'add']);
    Route::get('companies/job/delete', [CompanyController::class, 'delete']);
});


Route::group(['middleware'=>'jobseekers'], function(){
       //profile url
       Route::get('panel/user/profile',[profileController::class, 'profile']);
       Route::post('panel/user/profile',[profileController::class, 'profileAdd']);
       Route::post('panel/user/profile',[profileController::class, 'avator']);
       Route::get('panel/user/help',[profileController::class, 'help']);

       //cv url
     
       Route::get('job/cv',[profileController::class,'homeCv']);
       Route::post('job/cv',[profileController::class,'uploadCv']);
});


 


