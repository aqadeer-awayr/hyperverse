<?php

// use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

// admin Reset Password
Route::prefix('admin')->group(function () {
    //admin password reset routes
    Route::post('/password/email', 'AdminForgotPasswordController@sendResetLinkEmail')
        ->name('admin.password.email');
    Route::get('/password/reset', 'AdminForgotPasswordController@showLinkRequestForm')
        ->name('admin.password.request');
    Route::post('/password/reset', 'AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'AdminResetPasswordController@showResetForm')
        ->name('admin.password.reset');
});

Route::group(['namespace' => 'LMS\Admin'], function () {
    Route::get('/admin/login', 'AuthController@index')->name('admin.login');
    Route::post('/admin/logout', 'AuthController@logout')->name('admin.logout');
    Route::post('/admin/login', 'AuthController@login');
});
Route::post('post-registration', 'ProfileController@postRegistration')->name('register.post');

/* New Added Routes */

Route::get('account/verify/{token}', 'ProfileController@verifyAccount')->name('user.verify');

Route::get('/thank-you', 'Auth\RegisterController@thankYou')->name('thankyou');

// set locale using session
Route::get('setlocale/{locale}', 'ProfileController@setlanguage')->name('set.locale');

Route::get('/', 'HomeController@home')->name('site-home')->middleware('language_switcher');

Route::post('/test', 'HomeController@test');
Route::get('/get-capitals', 'HomeController@getCapitals');
Route::group(['middleware' => ['auth', 'language_switcher']], function () {
    Route::get('/updateprofile', 'ProfileController@hyperverse')->name('profile.update');
    Route::post('/referral-link', 'ProfileController@updateProfile')->name('referral.update');
    Route::get('/profile', 'ProfileController@profile')->name('profile');
    Route::post('/location', 'ProfileController@updateLocation')->name('location.update');
    Route::get('/hvregister', 'ProfileController@refferLink')->name('hyperverse.hvregister');
    Route::post('/updateprofile', 'ProfileController@update')->name('update.profile');
    Route::post('/updateName', 'ProfileController@updateName')->name('update.name');
    Route::post('/feedback', 'ProfileController@feedback')->name('feedback');
    Route::get('/training', 'CMS\Admin\TrainingController@training')->name('gallery.index');
});
Route::get('myform/ajax/{id}', 'ProfileController@myformAjax');
Route::get('get-announcemet/{id}', 'CMS\Admin\AnnouncementController@show');
Route::get('/get-signup/{params}', 'ProfileController@params');



Route::group(['prefix' => '/admin', 'middleware' => ['auth:admin']], function () {
    Route::group(['namespace' => 'LMS\Admin'], function () {
        Route::get('/', 'CourseController@dashboard')->name('home');
        Route::resource('courses', 'CourseController');
        Route::resource('languages', 'LanguageController');
        Route::resource('course_ml', 'CourseMLController');
        Route::resource('quizzes', 'QuizController')->except('create');
        // Route::resource('roles', 'RoleController');
        Route::resource('questions', 'QuestionController')->except('create');
        Route::resource('lessons', 'LessonController')->except('create');
        Route::get('/lessons/create/{course}', 'LessonController@create')->name('lessons.create');
        Route::get('/quizzes/create/{course}', 'QuizController@create')->name('quizzes.create');
        Route::get('/questions/create/{quiz}', 'QuestionController@create')->name('questions.create');
        Route::get('/quizzes/status/{id}', 'QuizController@status')->name('quizzes.status');
    });

    Route::group(['namespace' => 'CMS\Admin'], function () {
        Route::get('/cms', 'CMSController@index')->name('cms.index');
        Route::post('upload-image', 'ImageController@uploadImage')->name('upload.image');
        Route::resource('announcements', 'AnnouncementController');
        Route::resource('home-page', 'HomePageController');
        Route::resource('faqs', 'FAQController');
        Route::resource('timelines', 'TimeLineController');
        Route::resource('capitals', 'CapitalController');
        Route::resource('trainings', 'TrainingController');
        Route::resource('profiles', 'ProfilePageController');
        Route::post('update/training', 'TrainingController@update')->name('training.update');
    });
});


Route::get('section-response/{data}', 'CMS\Admin\HomePageController@sectionResponse');
Route::get('faq-response/{data}', 'CMS\Admin\FAQController@faqResponse');
Route::get('timeline-response/{data}', 'CMS\Admin\TimeLineController@timelineResponse');
Route::get('profile-response/{data}', 'CMS\Admin\ProfilePageController@profileResponse');
// Route::get('design',function(){
//     return view('lms.home-lms');
// });


// XTE9jSF5Y8CGcVZ3pds6
