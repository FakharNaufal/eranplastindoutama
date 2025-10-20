<?php


use App\Http\Controllers\CompanyAboutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyStatisticController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OurPrincipleController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\ProjectClientController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HeroSectionController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\CompanyStatistic;
use App\Models\Product;
use App\Models\OurPrinciple;
use App\Models\Testimonial;
use App\Models\ProjectClient;
use App\Models\CompanyAbout;
use App\Models\OurTeam;


Route::get('/',[FrontController::class, 'index'])->name('front.index');
Route::get('/team',[FrontController::class, 'team'])->name('front.team');
Route::get('/about',[FrontController::class, 'about'])->name('front.about');
Route::get('/appointment',[FrontController::class, 'appointment'])->name('front.appointment');
Route::get('/ourservice',[FrontController::class, 'ourservice'])->name('front.ourservice');
Route::get('/news',[FrontController::class, 'news'])->name('front.news');
Route::post('/appointment/store',[FrontController::class, 'appointment_store'])->name('front.appointment_store');
Route::get('/news/details1', [FrontController::class, 'news_details1'])->name('front.news_details1');
Route::get('/news/details2', [FrontController::class, 'news_details2'])->name('front.news_details2');
Route::get('/news/details3', [FrontController::class, 'news_details3'])->name('front.news_details3');
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['id', 'en'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Route::put('/profile', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
    //Route::post('/profile/picture', [ProfileController::class, 'updateProfilePicture'])->name('profile.updateProfilePicture');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::middleware('can:manage statistics')->group(function(){
            Route::resource('statistics', CompanyStatisticController::class);
        });

        Route::middleware('can:manage products')->group(function(){
            Route::resource('products', ProductController::class);
        });

        Route::middleware('can:manage principles')->group(function(){
            Route::resource('principles', OurPrincipleController::class);
        });

        Route::middleware('can:manage testimonials')->group(function(){
            Route::resource('testimonials', TestimonialController::class);
        });

        Route::middleware('can:manage clients')->group(function(){
            Route::resource('clients', ProjectClientController::class);
        });

        Route::middleware('can:manage teams')->group(function(){
            Route::resource('teams', OurTeamController::class);
        });

        Route::middleware('can:manage abouts')->group(function(){
            Route::resource('abouts', CompanyAboutController::class);
        });

        Route::middleware('can:manage appointments')->group(function(){
            Route::resource('appointments', AppointmentController::class);
        });

        Route::middleware('can:manage hero sections')->group(function(){
            Route::resource('hero_sections', HeroSectionController::class);
        });
    });
});
require __DIR__.'/auth.php';
