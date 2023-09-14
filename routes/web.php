<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerificationController;
use App\Listeners\LogVerifiedUser;
use Illuminate\Auth\Events\Verified;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\SocialController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/!

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

        /* Google Social Login */
        Route::get('/login/google', 'GoogleLoginController@redirect')->name('login.google-redirect');
        Route::get('/login/google/callback', 'GoogleLoginController@callback')->name('login.google-callback');

        /* Facebook login*/
        Route::get('login/facebook', [SocialController::class, 'facebookRedirect']);
        Route::get('login/facebook/callback', [SocialController::class, 'loginWithFacebook']);
             
        // Email verification route
        Route::get('verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify');
        Route::get('verification-success', function () {
            return view('verification-success'); 
        })->name('verification.success');
        Route::get('verification-failed', function () {
            return view('verification-failed');     
        })->name('verification.failed');

        //forgot password
         
        Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
        Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
        Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
        Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');



        Route::get('/event/{eventId}', [EventController::class, 'show'])->name('event.details');

        
    });


    Route::group(['middleware' => ['auth']], function() {
 

        // Protected routes for verified users
        Route::get('/protected', 'HomeController@protected')->name('protected');
        
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        
        /* Complete-registration*/ 
        
        Route::get('/complete-registration', 'OrganizerController@showRegistrationForm')->name('organizer.registration');
        Route::post('/complete-registration', 'OrganizerController@completeRegistration')->name('organizer.complete.registration');
  
        /* dashboard orgnaizer*/ 

        Route::get('/organizer/dashboard', 'OrganizerController@dashboard')->name('organizer.dashboard');

    });
    
    
    
});

