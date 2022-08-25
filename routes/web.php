<?php

use App\Model\estateimage;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('lang/change', 'LangController@change')->name('changeLang');


Auth::routes();

Route::get('/', 'V3Controller@index')->name('home');
Route::get('/about', 'V3Controller@about')->name('about');
Route::get('/contactus', 'V3Controller@contactus')->name('contactus');
Route::get('/EstateRequest', 'V3Controller@EstateRequest')->name('EstateRequest');
Route::get('CheckBirthdayLeoMal', 'V3Controller@CheckBirthdayLeoMal');
Route::get('CheckTenant', 'V3Controller@CheckTenant');
Route::get('CheckFinish', 'V3Controller@CheckFinish');
Route::get('Estate/{trackcode}', 'V3Controller@EstateProperty');
Route::get('Project/{trackcode}', 'V3Controller@ProjectProperty');
Route::get('EstateProperties/{rent}', 'V3Controller@getProperties');
Route::get('Search', 'V3Controller@showsearch');
Route::get('project', 'V3Controller@showproject');

Route::get('/getRegion', 'HomeController@getRegion');
Route::get('/getUsageType', 'HomeController@getUsageType');
Route::get('/getEstateOwnerShip', 'HomeController@getEstateOwnerShip');
Route::get('/getFacilities', 'HomeController@getFacilities');
Route::get('/getEstatetype', 'HomeController@getEstatetype');
Route::get('/getEstate', 'HomeController@getEstate');


Route::group(['prefix' => '{locale}'], function () {
    Route::get('/', 'HomeController@index')->name('home')->middleware('setLocale');
});


Route::get('/cc', function () {
    Artisan::call('cache:clear');
    echo '<script>alert("cache clear Success")</script>';
});
Route::get('/ccc', function () {
    Artisan::call('config:cache');
    echo '<script>alert("config cache Success")</script>';
});
Route::get('/vc', function () {
    Artisan::call('view:clear');
    echo '<script>alert("view clear Success")</script>';
});
Route::get('/cr', function () {
    Artisan::call('route:cache');
    echo '<script>alert("route clear Success")</script>';
});
Route::get('/coc', function () {
    Artisan::call('config:clear');
    echo '<script>alert("config clear Success")</script>';
});
Route::get('/storage123', function () {
    Artisan::call('storage:link');
    echo '<script>alert("linked")</script>';
});


Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'middleware' => ['admin']], function () {

    Route::get('lang/change', 'AdminController@change')->name('changeLang');

    Route::get('/cc', function () {
        Artisan::call('cache:clear');
        echo '<script>alert("cache clear Success")</script>';
    });
    Route::get('/ccc', function () {
        Artisan::call('config:cache');
        echo '<script>alert("config cache Success")</script>';
    });
    Route::get('/vc', function () {
        Artisan::call('view:clear');
        echo '<script>alert("view clear Success")</script>';
    });
    Route::get('/cr', function () {
        Artisan::call('route:cache');
        echo '<script>alert("route clear Success")</script>';
    });
    Route::get('/coc', function () {
        Artisan::call('config:clear');
        echo '<script>alert("config clear Success")</script>';
    });
    Route::get('/storage123', function () {
        Artisan::call('storage:link');
        echo '<script>alert("linked")</script>';
    });


    Route::match(['get', 'post', 'put'], 'ActionServer', 'AdminController@ActionServer')->name('ActionServer');

    Route::get('/', 'AdminController@index')->name('index');
    Route::get('/index', 'AdminController@index')->name('index');


    //Prject  Part
    Route::get('CreateProject', 'ProjectController@create')->name('CreateProject');
    Route::get('Project', 'ProjectController@index')->name('Project');
    Route::post('storeProject', 'ProjectController@store')->name('storeProject');
    Route::get('Project/edit/{id}', 'ProjectController@edit')->name('portal.ShowEditProject');
    Route::post('UpdateProject', 'ProjectController@update')->name('UpdateProject');



    //Estate Part
    Route::get('Estate', 'EstateController@index')->name('Estate');
    Route::get('image', 'EstateController@image')->name('image');

    Route::get('CreateEstate', 'EstateController@create')->name('CreateEstate');
    Route::post('storeEstate', 'EstateController@store')->name('storeEstate');
    Route::post('ChangeStatusEstate', 'EstateController@ChangeStatusEstate')->name('ChangeStatusEstate');
    Route::post('ChangeStatusEstateUser', 'EstateController@ChangeStatusEstateUser')->name('ChangeStatusEstateUser');

    Route::get('Estate/edit/{id}', 'EstateController@edit')->name('portal.ShowEditProduct');
    Route::post('UpdateEstate', 'EstateController@update')->name('UpdateEstate');

    Route::post('DeleteFacilitiesEstate', 'EstateController@DeleteFacilitiesEstate')->name('DeleteFacilitiesEstate');

    Route::post('AddFacilitiesToEstate', 'EstateController@AddFacilitiesToEstate')->name('AddFacilitiesToEstate');

    Route::post('ChangeElevatoEstate', 'EstateController@ChangeElevatoEstate')->name('ChangeElevatoEstate');

    Route::post('ChangeParkingEstate', 'EstateController@ChangeParkingEstate')->name('ChangeParkingEstate');

    Route::post('ChangewarehouseEstate', 'EstateController@ChangewarehouseEstate')->name('ChangewarehouseEstate');

    Route::post('ChangeBalconyEstate', 'EstateController@ChangeBalconyEstate')->name('ChangeBalconyEstate');

    Route::post('DeleteEstate', 'EstateController@destroy')->name('DeleteEstate');
    Route::post('AddPossibilitiesToEstate', 'EstateController@AddPossibilitiesToEstate')->name('AddPossibilitiesToEstate');

    Route::post('DeleteImageEstate', 'EstateController@DeleteImageEstate')->name('DeleteImageEstate');

    Route::post('uploadImage', 'EstateController@uploadImageEstate')->name('uploadImage');

    Route::get('download/{Id}', function ($Id) {


        $estesImage = estateimage::where('id', $Id)->first();
        $photoname = $estesImage->photo;
        $namephoto = $estesImage->namephoto;
        $namefolder = $estesImage->namefolder;

        // Check if file exists in app/storage/file folder
        $file_path = public_path() . $photoname;


        if (file_exists($file_path)) {
            // Send Download

            return Response::download($file_path, $namephoto, [
                'Content-Length: ' . filesize($file_path)
            ]);
        } else {
            // Error
            exit('Requested file does not exist on our server!');
        }
    })->where('filename', '[A-Za-z0-9\-\_\.]+');


    Route::get('CreateRegion', 'AreaController@create')->name('CreateRegion');
    Route::post('storeRegion', 'AreaController@store')->name('storeRegion');
    Route::post('DeleteRegion', 'AreaController@destroy')->name('DeleteRegion');
    Route::post('EditRegion', 'AreaController@update')->name('EditRegion');

    Route::get('CreateEstateType', 'EstateTypeController@create')->name('CreateEstateType');
    Route::post('storeEstateType', 'EstateTypeController@store')->name('storeEstateType');
    Route::post('DeleteEstateType', 'EstateTypeController@destroy')->name('DeleteEstateType');
    Route::post('EditEstateType', 'EstateTypeController@update')->name('EditEstateType');

    Route::get('CreateFacilities', 'FacilitiesController@create')->name('CreateFacilities');
    Route::post('storeFacilities', 'FacilitiesController@store')->name('storeFacilities');
    Route::post('DeleteFacilities', 'FacilitiesController@destroy')->name('DeleteFacilities');
    Route::post('EditFacilities', 'FacilitiesController@update')->name('EditFacilities');

    Route::get('testw', 'UsageTypeController@testw')->name('testw');


    Route::get('CreateUsageType', 'UsageTypeController@create')->name('CreateUsageType');
    Route::post('storeUsageType', 'UsageTypeController@store')->name('storeUsageType');
    Route::post('DeleteUsageType', 'UsageTypeController@destroy')->name('DeleteUsageType');
    Route::post('EditUsageType', 'UsageTypeController@update')->name('EditUsageType');


    Route::get('CreateOwnership', 'OwnershipController@create')->name('CreateOwnership');
    Route::post('storeOwnership', 'OwnershipController@store')->name('storeOwnership');
    Route::post('DeleteOwnership', 'OwnershipController@destroy')->name('DeleteOwnership');
    Route::post('EditOwnership', 'OwnershipController@update')->name('EditOwnership');

});

/*Route::group(['prefix' => 'v1/'],function (){

    Route::get('/', 'V1Controller@index')->name('home');
    Route::get('/about', 'V1Controller@about')->name('about');
    Route::get('/contactus', 'V1Controller@contactus')->name('contactus');
    Route::get('/EstateRequest', 'V1Controller@EstateRequest')->name('EstateRequest');
    Route::get('CheckBirthdayLeoMal','V1Controller@CheckBirthdayLeoMal');
    Route::get('CheckTenant','V1Controller@CheckTenant');
    Route::get('CheckFinish','V1Controller@CheckFinish');
    Route::get('Estate/{trackcode}','V1Controller@EstateProperty');
    Route::get('EstateProperties/{rent}','V1Controller@getProperties');
    Route::get('Search','V1Controller@showsearch');
});*/

/*Route::group(['prefix' => 'v2/'],function (){

    Route::get('/', 'V2Controller@index')->name('home');
    Route::get('/about', 'V2Controller@about')->name('about');
    Route::get('/contactus', 'V2Controller@contactus')->name('contactus');
    Route::get('/EstateRequest', 'V2Controller@EstateRequest')->name('EstateRequest');
    Route::get('CheckBirthdayLeoMal','V2Controller@CheckBirthdayLeoMal');
    Route::get('CheckTenant','V2Controller@CheckTenant');
    Route::get('CheckFinish','V2Controller@CheckFinish');
    Route::get('project','V2Controller@showproject');
    Route::get('Estate/{trackcode}','V2Controller@EstateProperty');
    Route::get('EstateProperties/{rent}','V2Controller@getProperties');
    Route::get('Search','V2Controller@showsearch');
});*/

/*Route::group(['prefix' => 'v4/'],function (){

    Route::get('/', 'V4Controller@index')->name('home');
    Route::get('/about', 'V4Controller@about')->name('about');
    Route::get('/contactus', 'V4Controller@contactus')->name('contactus');
    Route::get('/EstateRequest', 'V4Controller@EstateRequest')->name('EstateRequest');
    Route::get('CheckBirthdayLeoMal','V4Controller@CheckBirthdayLeoMal');
    Route::get('CheckTenant','V4Controller@CheckTenant');
    Route::get('CheckFinish','V4Controller@CheckFinish');
    Route::get('Estate/{trackcode}','V4Controller@EstateProperty');
    Route::get('EstateProperties/{rent}','V4Controller@getProperties');
    Route::get('Search','V4Controller@showsearch');
});

Route::group(['prefix' => 'v5/'],function (){

    Route::get('/', 'V5Controller@index')->name('home');
    Route::get('/about', 'V5Controller@about')->name('about');
    Route::get('/contactus', 'V5Controller@contactus')->name('contactus');
    Route::get('/EstateRequest', 'V5Controller@EstateRequest')->name('EstateRequest');
    Route::get('CheckBirthdayLeoMal','V5Controller@CheckBirthdayLeoMal');
    Route::get('CheckTenant','V5Controller@CheckTenant');
    Route::get('CheckFinish','V5Controller@CheckFinish');
    Route::get('Estate/{trackcode}','V5Controller@EstateProperty');
    Route::get('EstateProperties/{rent}','V5Controller@getProperties');
    Route::get('Search','V5Controller@showsearch');
});*/



