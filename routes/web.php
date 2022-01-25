<?php

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('CheckBirthdayLeoMal','HomeController@CheckBirthdayLeoMal');
Route::get('CheckTenant','HomeController@CheckTenant');
Route::get('CheckFinish','HomeController@CheckFinish');
Route::get('Estate/{trackcode}','HomeController@EstateProperty');

Route::get('EstateProperties/{rent}','HomeController@getProperties');

Route::get('Search','HomeController@showsearch');

Route::get('/getRegion','HomeController@getRegion');
Route::get('/getUsageType','HomeController@getUsageType');
Route::get('/getEstateOwnerShip','HomeController@getEstateOwnerShip');
Route::get('/getFacilities','HomeController@getFacilities');
Route::get('/getEstatetype','HomeController@getEstatetype');
Route::get('/getEstate','HomeController@getEstate');


Route::group(['prefix' => '{locale}'],function (){
    Route::get('/', 'HomeController@index')->name('home')->middleware('setLocale');
});

Route::group(['prefix' => 'admin/','as'=>'admin.','middleware'=>['admin']],function (){


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

    Route::post('DeleteImageEstate', 'EstateController@DeleteImageEstate')->name('DeleteImageEstate');

    Route::post('uploadImage','EstateController@uploadImageEstate')->name('uploadImage');

    Route::get('download/{Id}', function($Id)
    {


        $estesImage=estateimage::where('id',$Id)->first();
        $photoname=$estesImage->photo;
        $namephoto=$estesImage->namephoto;
        $namefolder=$estesImage->namefolder;

        // Check if file exists in app/storage/file folder
        $file_path = public_path().$photoname;


        if (file_exists($file_path))
        {
            // Send Download

            return Response::download($file_path,$namephoto, [
                'Content-Length: '. filesize($file_path)
            ]);
        }
        else
        {
            // Error
            exit('Requested file does not exist on our server!');
        }
    })    ->where('filename', '[A-Za-z0-9\-\_\.]+');





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
