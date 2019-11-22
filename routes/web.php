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
//  Frontend


Route::group(['namespace'=>'Frontend'],function(){
	Route::get('/','HomepageController@index');
    //footer
    Route::get('chat','HomepageController@chat');
    Route::get('/aboutus','FooterController@about');
    Route::get('/condition','FooterController@condition');
    Route::get('/contact','FooterController@contact');
    Route::get('/privacy','FooterController@privacy');
    Route::get('/sitemap','FooterController@sitemap');
    Route::get('/membership','FooterController@membership');
    Route::get('/promote','FooterController@promote');
    Route::get('/banner','FooterController@banner');
    Route::get('/sellfast','FooterController@sellfast');
	// Home Page Route
	Route::get('category/{id}','HomepageController@categoryPage');
	Route::get('jobs/','JobsController@jobs');
	Route::get('jobs/category/{id}','JobsController@jobsPost');
    Route::get('jobs/details/{id}','JobsController@job_details');
    
    // Property
    Route::get('property/{id}','PageController@property');
    Route::get('property/details/{id}','PageController@propertyDetails');
    // Food
    Route::get('food/{id}','PageController@food');
    Route::get('food/details/{id}','PageController@foodDetails');
    
    // Home And Living
    Route::get('home-and-living/{id}','PageController@homeAndLiving');
    Route::get('home-and-living/details/{id}','PageController@homeAndLivingDetails');

    // Fashion
    Route::get('fashion-health-beauty/{id}','PageController@fashion');
    Route::get('fashion-health-beauty/details/{id}','PageController@fashionDetails');

    // Pets
    Route::get('pats-and-animelas/{id}','PageController@pets');
    Route::get('pats-and-animelas/details/{id}','PageController@petsDetails');

    // Sports
    Route::get('hobbies-sports-kids/{id}','PageController@sports');
    Route::get('hobbies-sports-kids/details/{id}','PageController@sportsDetails');

    // Business
    Route::get('/business-and-industry/{id}','PageController@business');
    Route::get('business-and-industry/details/{id}','PageController@businessDetails');
    
    // Education
    Route::get('/education/{id}','PageController@education');
    Route::get('education/details/{id}','PageController@educationDetails');

    // Serives

    Route::get('/services/{id}','PageController@services');
    Route::get('services/details/{id}','PageController@servicesDetails');




	//  Chat Route
	Route::post('chat','ChatController@chat');

	Route::get('/ads','AdsController@index');
	Route::get('/ads-details/{id}','AdsController@details');

	Route::get('/post-ads/category','AdsController@category');
	Route::get('/post-ads/category-rent','AdsController@category_rent');

	Route::get('/post-ads/category-rent100','AdsController@category_rent1');
	Route::get('/post-ads/category100','AdsController@category1');

	Route::middleware(['auth'])->group(function () {
		//  Post ads Page
		Route::get('/post-ads','AdsController@post_ads');

		Route::get('profile/change-password','UserController@changePassword');
		Route::post('profile/change-password','UserController@saveChangePassword');
		// Message
		Route::post('message','MessageController@message');

		//  Food 
		Route::post('food','FoodController@store');

		// Home And Living
		Route::resource('home_and_living','HomeAndLivingController');

		// Fashion
		Route::resource('fashion','FashionController');

		// Pets
		Route::resource('pets','PatsAndAnimalsController');
		
		// Sports
		Route::resource('sports','SportsController'); 
 
		// Business
		Route::resource('business','BusinessController');

		// Education
		Route::resource('education','EducationController');

		// Services
		Route::resource('services','SerivesController');

		Route::get('post-offer-property-apartment-flat','AdsController@category_rent1_item');
		Route::post('post-offer-property-apartment-flat','AdsController@category_rent1_item_post');

		// Promote Product

		Route::get('/promote/ads/{id}','PromoteController@promote');


		// Banner Post
		Route::get('banner/post','BannerPostControlle@index');
		Route::post('banner/post','BannerPostControlle@store');

		// Profile
		Route::get('profile','ProfileController@index');
        Route::get('profile/setting','ProfileController@setting');
        Route::post('profile/pic','ProfileDetailsController@store');
		Route::get('profile/account','ProfileController@account');
		Route::get('profile/my-job','ProfileController@myPostedJob');
		Route::post('userSavePassword','ProfileController@savePassword');

		Route::get('profile/delete/{id}','AdsController@adsDelete');
		Route::get('profile/ads/edit/{id}','AdsController@adsEdit');
		Route::put('profile/ads/update/{id}','AdsController@adsUpdate');

		// Property for Rent
		Route::get('property-for-rent','RentController@index');
		Route::post('property-for-rent','RentController@store')->name('rent-store');


		// Jobs Route
		Route::get('job-post','JobsController@index');
		Route::get('/post-ads/job','AdsController@job');
		Route::post('/post-ads/job','AdsController@jobSave');
		Route::delete('profile/{id}','AdsController@adsDelete')->name('job_delete');
		Route::get('profile/{id}','AdsController@adsEdit')->name('job_edit');
		Route::put('profile/{id}','AdsController@adsUpdate')->name('job_update');

	});


	//  Ads post category wise
	Route::get('sell-item','AdsController@sell_item');
	Route::post('sell-item','AdsController@sell_item_post');
	Route::get('category/{category}/sub_category', 'AdsController@getSubcategory');
	Route::get('devesion/{devesion}/city', 'AdsController@getCity');
	Route::get('/getBrand/{brand}', 'AdsController@getBrand');
	Route::get('/getModel/{model}', 'AdsController@getModel');

	Route::get('logout', 'HomepageController@logout')->name('logout');

});







//  Backend


//============================ Backend Route Start ============================//
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm');
// Route::post('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::get('admin/register', 'Auth\AdminRegisterController@showRegistrationForm');
Route::post('admin/register', 'Auth\AdminRegisterController@register')->name('admin.register');

	Route::group(['middleware'=>['assign.guard:admin,admin/login']],function(){

		Route::prefix('admin')->group(function () {
			Route::group(['namespace'=>'Backend'],function(){
				// For Admin
			Route::get('/dashboard','HomeController@index')->name('dashboard');
			Route::get('/users','UsersController@showUsers');
			Route::get('/delete-users/{id}','UsersController@destroyUsers');
			Route::get('/edit-users/{id}', 'UsersController@editUsers');
			Route::POST('/edit-users/{id}', 'UsersController@updateUsers');
			Route::get('/change-password', 'UsersController@chnagePassword');
			Route::post('/change-password', 'UsersController@savePassword');

			// For User
			Route::get('users/list','UsersController@userList');
			Route::get('user/delete-users/{id}','UsersController@userDestroyUsers');
			// Route::resource('/menus','MenusController');
			// Route::resource('/blogCat','CategoryController');
			// Route::resource('/blog','BlogController');
			// Route::resource('/brand','BrandController');
			// Route::get('/product/attributes/{id}','ProductAttrabuteController@addProductAttributes');
			// Route::post('/product/attributes/{id}','ProductAttrabuteController@saveProductAttributes');

			//  Banner Page Position
			Route::resource('banner_page_position','BannerPagePositionController');
			Route::get('/banner/request','BannerPagePositionController@request');
			Route::get('banner/request/approve/{id}','BannerPagePositionController@singleRequest');
			Route::post('/banner/request/approve/slkfsl/{id}','BannerPagePositionController@approved');

			// Adsvartise Banner
			Route::resource('advertise/banner/category','AdvertiseBannerCategoryController');
			Route::resource('advertise/banner','AdvertiseBannerController');

			//  Main Category


			Route::resource('/product/features','ProductFeaturesController');
			Route::resource('/product','ProductController');


			// Job Route
			Route::get('panding-jobs','JobController@pandingJob');
			Route::get('panding/job-details/{id}','JobController@pandingJobDetails');
			Route::post('pandding/job/{id}','JobController@pandingJobApprove');



			Route::get('pandding-product','SellServiceController@pandding_product');
			Route::get('pandding-details/{id}','SellServiceController@productDetails');
			Route::post('pandding-details/{id}','SellServiceController@producApproved');


			// Panding BannerAds Post
			Route::get('pandingBannerPost','BannerRequistPost@index');



			// Route::get('{slug}','CategoryController@slug');
			Route::group(['namespace'=>'Website'],function(){
				// Route::resource('/submenu','SubmenuController');
				// Route::resource('/slider','SliderController');
				// Route::resource('/aboutus','AboutController');
				// Route::resource('/component','ComponentController');
				// Route::resource('/instructor','InstructorController');
				// Route::resource('/website_setting','WebsiteSettingController');
				// Route::resource('/team','TeamController');
				// Route::resource('/gallery','GalleryController');
				// Route::resource('/news-category','NewsCateoryController');
				// Route::resource('/news-posts','NewsController');
				// Route::resource('/emercency','EmarcencyInfo');
				// Route::resource('/gallery-category','GalleryCategoryController');
				// Route::get('/contact','DonateController@donate_list');

			});

		});

			//  Brand , Model ,Devesion And City Route
			Route::resource('/brand','BrandController');
			Route::resource('/model','ModelController');
			Route::resource('/devesion','DevesionController');
			Route::resource('/city','CityController');
			Route::resource('/adminCategory','CategoryController');

	});
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

