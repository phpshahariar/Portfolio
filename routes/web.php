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

Route::get('/', 'FrontEndController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-home', 'BackEndController@addHome');
Route::post('/new-info', 'BackEndController@saveHomeInfo');
Route::get('/manage-home', 'BackEndController@manageHomeInfo');
Route::get('/unpublished-info/{id}', 'BackEndController@unpublishedInfo');
Route::get('/published-info/{id}', 'BackEndController@publishedInfo');
Route::get('/edit-info/{id}', 'BackEndController@editInfo');
Route::post('/update-info', 'BackEndController@updateInfo');
Route::get('/delete-info/{id}', 'BackEndController@deleteInfo');


Route::get('/add-bg-image', 'BgImageController@addBgImage');
Route::post('/new-bg-image', 'BgImageController@saveBgImage');
Route::get('/manage-bg-image', 'BgImageController@manageBgImage');
Route::get('/unpublished-bgimage/{id}', 'BgImageController@unpublishedBgImage');
Route::get('/published-bgimage/{id}', 'BgImageController@publishedBgImage');
Route::get('/edit-bgimage/{id}', 'BgImageController@editBgImage');
Route::post('/update-bg-image', 'BgImageController@updateBgImage');
Route::get('/delete-bgimage/{id}', 'BgImageController@deleteBgImage');


Route::get('/add-about', 'AboutController@addAbout');
Route::post('/new-about', 'AboutController@saveAboutInfo');
Route::get('/manage-about', 'AboutController@manageAboutInfo');
Route::get('/unpublished-about/{id}', 'AboutController@unpublishedAbout');
Route::get('/published-about/{id}', 'AboutController@publishedAbout');
Route::get('/edit-about/{id}', 'AboutController@editAbout');
Route::post('/update-about', 'AboutController@updateAbout');
Route::get('/delete-about/{id}', 'AboutController@deleteAbout');



Route::get('/add-logo-name', 'LogoController@addLogoNameInfo');
Route::post('/new-logo-name', 'LogoController@saveLogoNameInfo');
Route::get('/manage-logo-name', 'LogoController@manageLogoNameInfo');
Route::get('/unpublished-logo-name/{id}', 'LogoController@unpublishedLogoNameInfo');
Route::get('/published-logo-name/{id}', 'LogoController@publishedLogoNameInfo');
Route::get('/edit-logo-name/{id}', 'LogoController@editLogoNameInfo');
Route::post('/update-profile', 'LogoController@updateLogoNameInfo');
Route::get('/delete-logo-name/{id}', 'LogoController@deleteLogoNameInfo');


Route::get('/add-service', 'ServiceController@addService');
Route::post('/new-service', 'ServiceController@saveServiceInfo');
Route::get('/manage-service', 'ServiceController@manageService');
Route::get('/unpublished-service/{id}', 'ServiceController@unpublishedService');
Route::get('/published-service/{id}', 'ServiceController@publishedService');
Route::get('/edit-service/{id}', 'ServiceController@editService');
Route::post('/update-service', 'ServiceController@updateService');
Route::get('/delete-service/{id}', 'ServiceController@deleteService');

Route::get('/add-testimonial', 'TestimonialController@addTestimonial');
Route::post('/new-testimonial', 'TestimonialController@saveTestimonialInfo');
Route::get('/manage-testimonial', 'TestimonialController@manageTestimonialInfo');
Route::get('/unpublished-testimonial/{id}', 'TestimonialController@unpublishedTestimonialInfo');
Route::get('/published-testimonial/{id}', 'TestimonialController@publishedTestimonialInfo');
Route::get('/edit-testimonial/{id}', 'TestimonialController@editTestimonialInfo');
Route::post('/update-testimonial', 'TestimonialController@updateTestimonialInfo');


Route::get('/add-education', 'EducationController@addEducation');
Route::post('/new-education', 'EducationController@saveEducationInfo');
Route::get('/manage-education', 'EducationController@manageEducation');
Route::get('/unpublished-education/{id}', 'EducationController@unpublishedEducation');
Route::get('/published-education/{id}', 'EducationController@publishedEducation');
Route::get('/edit-education/{id}', 'EducationController@editEducationInfo');
Route::post('/update-education', 'EducationController@updateEducationInfo');
Route::get('/delete-education/{id}', 'EducationController@deleteEducationInfo');


Route::get('/add-experience', 'EducationController@addExperience');
Route::post('/new-experience', 'EducationController@saveExperienceInfo');
Route::get('/manage-experience', 'EducationController@manageExperience');
Route::get('/unpublished-experience/{id}', 'EducationController@unpublishedExperience');
Route::get('/published-experience/{id}', 'EducationController@publishedExperience');
Route::get('/edit-experience/{id}', 'EducationController@editExperience');
Route::post('/update-experience', 'EducationController@updateExperience');
Route::get('/delete-experience/{id}', 'EducationController@deleteExperience');


Route::get('/add-portfolio', 'EducationController@addPortfolio');
Route::post('/new-portfolio', 'EducationController@savePortfolioInfo');
Route::get('/manage-portfolio', 'EducationController@managePortfolioInfo');
Route::get('/unpublished-portfolio/{id}', 'EducationController@unpublishedPortfolio');
Route::get('/published-portfolio/{id}', 'EducationController@publishedPortfolio');
Route::get('/edit-portfolio/{id}', 'EducationController@editPortfolio');
Route::post('/update-portfolio', 'EducationController@updatePortfolio');
Route::get('/delete-portfolio/{id}', 'EducationController@deletePortfolio');

Route::get('/add-blog', 'EducationController@addBlog');
Route::post('/new-blog', 'EducationController@saveBlogInfo');
Route::get('/manage-blog', 'EducationController@manageBlogInfo');
Route::get('/unpublished-blog/{id}', 'EducationController@unpublishedBlog');
Route::get('/published-blog/{id}', 'EducationController@publishedBlog');
Route::get('/edit-blog/{id}', 'EducationController@editBlog');
Route::post('/update-blog', 'EducationController@updateBlog');
Route::get('/delete-blog/{id}', 'EducationController@deleteBlog');


Route::get('/add-touch', 'ServiceController@addTouch');
Route::post('/save-touch', 'ServiceController@saveTouchInfo');
Route::get('/manage-touch', 'ServiceController@manageTouch');
Route::get('/unpublished-touch/{id}', 'ServiceController@unpublishedTouch');
Route::get('/published-touch/{id}', 'ServiceController@publishedTouch');
Route::get('/edit-touch/{id}', 'ServiceController@editTouch');
Route::post('/update-touch', 'ServiceController@updateTouch');
Route::get('/delete-touch/{id}', 'ServiceController@deleteTouch');



Route::post('contact/store', 'FrontEndController@contactStore');




