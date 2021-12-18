<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\BannerController;


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



Route::get('/dashboard', function () {
    return view('backend.layouts.home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', [HomeController::class, 'index' ]);
Route::get('/about/global-business/', [HomeController::class, 'globalbusiness' ])->name('globalbusiness');
Route::get('/about/mision-vision/', [HomeController::class, 'misionvision' ])->name('misionvision');
Route::get('/about/sustainability/', [HomeController::class, 'sustainability' ])->name('sustainability');
Route::get('/about/careers/', [HomeController::class, 'careers' ])->name('careers');
Route::get('contact-us', [HomeController::class, 'contact' ])->name('contact');
Route::get('registration', [HomeController::class, 'registration' ])->name('registration');

Route::post('storeregistration', [HomeController::class, 'storeregistration' ])->name('storeregistration');

Route::get('service', [HomeController::class, 'service' ])->name('service');
Route::get('product-list', [HomeController::class, 'productlist' ])->name('productlist');
Route::get('project', [HomeController::class, 'project' ])->name('project');
Route::get('service/polished-concrete', [HomeController::class, 'polishedconcrete' ])->name('polishedconcrete');
Route::get('service/pu-flooring', [HomeController::class, 'puflooring' ])->name('puflooring');
Route::get('service/vinyl-flooring', [HomeController::class, 'vinylflooring' ])->name('vinylflooring');
Route::get('service/epoxy-flooring', [HomeController::class, 'epoxyflooring' ])->name('epoxyflooring');
Route::get('service/self-leveling-epoxy', [HomeController::class, 'selflevelingepoxy' ])->name('selflevelingepoxy');
Route::get('service/metallic-epoxy-flooring', [HomeController::class, 'metallicepoxyflooring' ])->name('metallicepoxyflooring');
Route::get('fair-face-plaster', [HomeController::class, 'fairfaceplaster' ])->name('fairfaceplaster');
Route::get('waterproofing', [HomeController::class, 'waterproofing' ])->name('waterproofing');
Route::get('constructionchemicals', [HomeController::class, 'constructionchemicals' ])->name('constructionchemicals');
Route::get('epoxy-parking-flooring', [HomeController::class, 'epoxyparkingflooring' ])->name('epoxyparkingflooring');
Route::get('companyprofile', [HomeController::class, 'companyprofile' ])->name('companyprofile');


Route::get('flooring', [HomeController::class, 'flooring' ])->name('flooring');
Route::get('concretewaterprofing', [HomeController::class, 'concretewaterprofing' ])->name('concretewaterprofing');
Route::get('PAINTCOATING', [HomeController::class, 'PAINTCOATING' ])->name('PAINTCOATING');
Route::get('epoxycoating', [HomeController::class, 'epoxycoating' ])->name('epoxycoating');
Route::get('pucoating', [HomeController::class, 'pucoating' ])->name('pucoating');
Route::get('repearing', [HomeController::class, 'repearing' ])->name('repearing');
Route::get('hetprofing', [HomeController::class, 'hetprofing' ])->name('hetprofing');

//backend
Route::group(['middleware'=>'auth'], function(){
	Route::prefix('users')->group(function(){
	route::get('/view',[UserController::class, 'view'])->name('users.view');
	route::get('/add', [UserController::class, 'add'])->name('users.add');
	route::post('/store', [UserController::class, 'store'])->name('users.store');
	route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
	route::post('/update/{id}', [UserController::class, 'update'])->name('users.update');
	route::get('/delete/{id}', [UserController::class, 'delete'])->name('users.delete');
});

Route::prefix('profile')->group(function(){
	route::get('/view',[ProfileController::class,'view'])->name('profile.view');
	route::get('/password/view', [ProfileController::class,'passwordView'])->name('password.view');
	route::post('/store', [ProfileController::class,'store'])->name('profile.store');
	route::get('/edit', [ProfileController::class,'edit'])->name('profile.edit');
	route::post('/update', [ProfileController::class,'update'])->name('profile.update');
	route::get('/delete/{id}', [ProfileController::class,'delete'])->name('profile.delete');
	route::post('/password/update', [ProfileController::class,'passwordupdate'])->name('password.update.view');
});

Route::prefix('logos')->group(function(){
	route::get('/view', [LogoController::class,'view'])->name('logos.view');
	route::get('/add', [LogoController::class,'add'])->name('logos.add');
	route::post('/store', [LogoController::class,'store'])->name('logos.store');
	route::get('/edit/{id}', [LogoController::class,'edit'])->name('logos.edit');
	route::post('/update/{id}', [LogoController::class,'update'])->name('logos.update');
	route::get('/delete/{id}', [LogoController::class,'delete'])->name('logos.delete');
});

Route::prefix('sliders')->group(function(){
	route::get('/view', [BannerController::class,'view'])->name('sliders.view');
	route::get('/add', [BannerController::class,'add'])->name('sliders.add');
	route::post('/store', [BannerController::class,'store'])->name('sliders.store');
	route::get('/edit/{id}', [BannerController::class,'edit'])->name('sliders.edit');
	route::post('/update/{id}', [BannerController::class,'update'])->name('sliders.update');
	route::get('/delete/{id}', [BannerController::class,'delete'])->name('sliders.delete');
});


});
