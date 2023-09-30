<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FaqLandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/admin-landing-faq2', function () {
    return view('pages.Landing.faqLanding');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/post', [AdminController::class, 'post'])->name('post');

Route::get('/listpost', [AdminController::class, 'listPost'])->name('listPost');

Route::get('/admin-landing', [AdminController::class, 'Landing'])->name('Landing');
Route::get('/admin-dikopos', [AdminController::class, 'dikoPos'])->name('dikoPos');
Route::get('/admin-dikosp', [AdminController::class, 'dikoSp'])->name('dikoSp');


Route::get('/admin-landing-features', [AdminController::class, 'featuresLanding'])->name('featuresLanding');
Route::get('/admin-landing-review', [AdminController::class, 'reviewLanding'])->name('reviewLanding');
Route::get('/admin-landing-faq', [AdminController::class, 'faqLanding'])->name('faqLanding');
// Route::get('/admin-landing-beranda', [AdminController::class, 'berandaLanding'])->name('berandaLanding');
// Route::get('/admin-landing-about', [AdminController::class, 'aboutLanding'])->name('aboutLanding');
// Route::get('/admin-landing-pengguna', [AdminController::class, 'penggunaLanding'])->name('penggunaLanding');
// Route::get('/admin-landing-motto', [AdminController::class, 'mottoLanding'])->name('mottoLanding');
// Route::get('/admin-landing-mockup', [AdminController::class, 'mockupLanding'])->name('mockupLanding');
// Route::get('/admin-landing-mockups', [AdminController::class, 'mockupsLanding'])->name('mockupsLanding');
// Route::get('/admin-landing-contact', [AdminController::class, 'contactLanding'])->name('contactLanding');


Route::get('/admin-sp-features', [AdminController::class, 'featuresSp'])->name('featuresSp');
Route::get('/admin-sp-featuresApplication', [AdminController::class, 'featuresApplicationSp'])->name('featuresApplicationSp');
Route::get('/admin-sp-faq', [AdminController::class, 'faqSp'])->name('faqSp');
Route::get('/admin-sp-harga', [AdminController::class, 'hargaSp'])->name('hargaSp');
Route::get('/admin-sp-plugin', [AdminController::class, 'pluginSp'])->name('pluginSp');
// Route::get('/admin-sp-beranda', [AdminController::class, 'berandaSp'])->name('berandaSp');
// Route::get('/admin-sp-keunggulan', [AdminController::class, 'keunggulanSp'])->name('keunggulanSp');
// Route::get('/admin-sp-mockups', [AdminController::class, 'mockupsSp'])->name('mockupsSp');
// Route::get('/admin-sp-promotions', [AdminController::class, 'promotionsSp'])->name('promotionsSp');
// Route::get('/admin-sp-blog', [AdminController::class, 'blogSp'])->name('blogSp');
// Route::get('/admin-sp-contact', [AdminController::class, 'contactSp'])->name('contactSp');


Route::get('/admin-pos-features', [AdminController::class, 'featuresPos'])->name('featuresPos');
Route::get('/admin-pos-featuresApplication', [AdminController::class, 'featuresApplicationPos'])->name('featuresApplicationPos');
Route::get('/admin-pos-faq', [AdminController::class, 'faqPos'])->name('faqPos');
Route::get('/admin-pos-harga', [AdminController::class, 'hargaPos'])->name('hargaPos');
Route::get('/admin-pos-plugin', [AdminController::class, 'pluginPos'])->name('pluginPos');
// Route::get('/admin-pos-mockups', [AdminController::class, 'mockupsPos'])->name('mockupsPos');
// Route::get('/admin-pos-blog', [AdminController::class, 'blogPos'])->name('blogPos');

Route::resource('faq_landings', FaqLandingController::class);