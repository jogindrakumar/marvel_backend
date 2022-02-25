<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\ExperienceController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\MapController;
use App\Models\Admin;
use App\Models\About;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Contact;
use App\Models\Map;

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

Route::get('/', function () {

    $abouts = About::find(1)->get();
    $portfolios = Portfolio::latest()->get();
    $experiences = Experience::latest()->get();
    return view('home',compact('abouts','portfolios','experiences'));
});

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//admin route
Route::group(['prefix' => 'admin', 'middleware'=>['admin:admin']],function(){

    Route::get('/login',[AdminController::class,'loginForm']);
    Route::post('/login',[AdminController::class,'store'])->name('admin.login');

   

});

 //Admin All routes
 Route::middleware(['auth:admin'])->group(function () {
    
 Route::get('/admin/logout',[AdminController::class,'destroy'])->name('admin.logout');
 Route::get('/admin/profile',[AdminProfileController::class,'AdminProfile'])->name('admin.profile');
 Route::get('/admin/profile/edit',[AdminProfileController::class,'AdminProfileEdit'])->name('admin.profile.edit');
 Route::post('/admin/profile/store',[AdminProfileController::class,'AdminProfileStore'])->name('admin.profile.store');
 Route::get('/admin/change/password',[AdminProfileController::class,'AdminChangePassword'])->name('admin.change.password');
 Route::post('/admin/update/password',[AdminProfileController::class,'AdminUpdatePassword'])->name('update.change.password');

 });


Route::prefix('about')->middleware(['auth:admin'])->group(function(){
Route::get('/view',[AboutController::class,'AboutView'])->name('all.about');
Route::get('/add',[AboutController::class,'AboutAdd'])->name('add.about');
Route::post('/store',[AboutController::class,'AboutStore'])->name('about.store');
Route::get('/edit/{id}',[AboutController::class,'AboutEdit'])->name('about.edit');
Route::post('/update/{id}',[AboutController::class,'AboutUpdate'])->name('about.update');
Route::get('/delete/{id}',[AboutController::class,'AboutDelete'])->name('about.delete');


 });

Route::prefix('education')->middleware(['auth:admin'])->group(function(){
Route::get('/view',[EducationController::class,'EduView'])->name('all.edu');
Route::get('/add',[EducationController::class,'EduAdd'])->name('add.edu');
Route::post('/store',[EducationController::class,'EduStore'])->name('edu.store');
Route::get('/edit/{id}',[EducationController::class,'EduEdit'])->name('edu.edit');
Route::post('/update/{id}',[EducationController::class,'EduUpdate'])->name('edu.update');
Route::get('/delete/{id}',[EducationController::class,'EduDelete'])->name('edu.delete');


 });
 Route::prefix('experience')->middleware(['auth:admin'])->group(function(){
Route::get('/view',[ExperienceController::class,'ExpView'])->name('all.exp');
Route::get('/add',[ExperienceController::class,'ExpAdd'])->name('add.exp');
Route::post('/store',[ExperienceController::class,'ExpStore'])->name('exp.store');
Route::get('/edit/{id}',[ExperienceController::class,'ExpEdit'])->name('exp.edit');
Route::post('/update/{id}',[ExperienceController::class,'ExpUpdate'])->name('exp.update');
Route::get('/delete/{id}',[ExperienceController::class,'ExpDelete'])->name('exp.delete');


 });

Route::prefix('portfolio')->middleware(['auth:admin'])->group(function(){
Route::get('/view',[PortfolioController::class,'PortfolioView'])->name('all.portfolio');
Route::get('/add',[PortfolioController::class,'PortfolioAdd'])->name('add.portfolio');
Route::post('/store',[PortfolioController::class,'PortfolioStore'])->name('portfolio.store');
Route::get('/edit/{id}',[PortfolioController::class,'PortfolioEdit'])->name('portfolio.edit');
Route::post('/update/{id}',[PortfolioController::class,'PortfolioUpdate'])->name('portfolio.update');
Route::get('/delete/{id}',[PortfolioController::class,'PortfolioDelete'])->name('portfolio.delete');


 });
 Route::prefix('message')->middleware(['auth:admin'])->group(function(){
Route::get('/view',[ContactController ::class,'MessageView'])->name('all.message');
// Route::get('/add',[ContactController ::class,'MessageAdd'])->name('add.message');
Route::post('/store',[ContactController ::class,'MessageStore'])->name('message.store');
Route::get('/edit/{id}',[ContactController ::class,'MessageEdit'])->name('message.edit');
Route::post('/update/{id}',[ContactController ::class,'MessageUpdate'])->name('message.update');
Route::get('/delete/{id}',[ContactController ::class,'MessageDelete'])->name('message.delete');

 });
 Route::post('/message/sent',[ContactController ::class,'MessageStore'])->name('message.store');


  Route::prefix('map')->middleware(['auth:admin'])->group(function(){
Route::get('/view',[MapController ::class,'MapView'])->name('all.map');
// Route::get('/add',[ContactController ::class,'MessageAdd'])->name('add.message');
Route::post('/store',[MapController ::class,'MapStore'])->name('map.store');
Route::get('/edit/{id}',[MapController ::class,'MapEdit'])->name('map.edit');
Route::post('/update/{id}',[MapController ::class,'MapUpdate'])->name('map.update');
Route::get('/delete/{id}',[MapController ::class,'MapDelete'])->name('map.delete');

 });

 
Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
