<?php

use Spatie\Activitylog\Models\Activity;
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

/*
 * Admin
 */

Route::get('/', 'AdminController@index');
Route::post('/admin-dashboard', 'AdminController@dashboard');
Route::get('/dashboard', 'SuperAdminController@index');
Route::get('/logout', 'SuperAdminController@logout');

//Route::get('/stockin', function () {
//    return view('admin.home.stockin');
//});

/*
 *Users Routes
 */

//Registration Routes
Route::get('/registration', 'UserController@showRegistration');
Route::post('/registration', 'UserController@registration');

//Userlist
Route::get('users', 'UserController@userList');

Route::get('/showagem','UserController@showagem')->name('showagem');

Route::get('/shownijeryaopv','UserController@shownijeryaopv')->name('shownijeryaopv');

Route::get('/showukraynakorvetbir','UserController@showukraynakorvetbir')->name('showukraynakorvetbir');

Route::get('/showukraynakorvetiki','UserController@showukraynakorvetiki')->name('showukraynakorvetiki');

Route::get('/showlibyaelliyedimetre','UserController@showlibyaelliyedimetre')->name('showlibyaelliyedimetre');

Route::get('/show/{projeadi}','UserController@show');

Route::get('/test/{$projeadi}','UserController@test');

//Update User
Route::get('/updateuser/{id}', 'UserController@editUser');
Route::post('/updateuser/{id}', 'UserController@updateUser');

//Delete User
Route::get('deleteuser/{id}', 'UserController@deleteUser');

/*
 * Stockin Routes
 */

Route::get('/stockin', 'UserController@showStockIn')->name('stockin');
Route::get('/stockin', 'UserController@showProjeler')->name('stockin');
Route::post('/stockin', 'UserController@stockIn');

//StockIn List
Route::get('stockinlist', 'UserController@stockInList');

//Update StockIn
Route::get('updatestockin/{id}', 'UserController@editStockIn');
Route::post('updatestockin/{id}', 'UserController@updateStockIn');

//Delete StockIn
Route::get('deletestockin/{id}', 'UserController@deleteStockIn');


/*
 * Stockout Routes
 */
Route::get('/stockout', 'UserController@showStockOut')->name('stockout');
Route::get('/stockout/getlot/{id}', 'UserController@getLot');
Route::get('/stockout/gettypecost/{id}', 'UserController@getTypeCost');
Route::post('/stockout', 'UserController@stockOut');

//StockOut List
Route::get('stockoutlist', 'UserController@stockOutList');
Route::get('projeler','UserController@projelerform');
Route::post('projeler', 'UserController@projelersave');

//Update StockOut
Route::get('updatestockout/{id}', 'UserController@editStockOut');
Route::get('/updatestockout/getlot/{id}', 'UserController@getLot');
Route::get('/updatestockout/gettypecost/{id}', 'UserController@getTypeCost');
Route::post('updatestockout/{id}', 'UserController@updateStockOut');

//Delete StockOut
Route::get('deletestockout/{id}', 'UserController@deleteStockOut');


/*
 * Role Routes
 */

//Add role
Route::get('/addrole', function () {
    return view('admin.role.addrole');
});
Route::post('/addrole', 'UserController@addRole');

//Role list
Route::get('/role', 'UserController@roleList');

//Update role
Route::get('/updaterole/{id}', 'UserController@editRole');
Route::post('/updaterole/{id}', 'UserController@updateRole');

//Delete role
Route::get('deleterole/{id}', 'UserController@deleteRole');


//Invoice Route
Route::get('/invoice/{id}', 'UserController@invoice');

//test
Route::get('/kritikseviye','UserController@kritikseviye');

Route::get('/showstockinone/{id}','UserController@showstockinone');


Route::get('/loggin',function(){
    Log::info('API endpoint abuse',[
        'user_id' => 1
    ]);
});

Route::get("/log",function(){
    Log::channel('i_love_this_logging_thing')->debug("Action log debug test",['my-string' => 'log me',"run"]);
    return ["result" => true];
});

Route::get("/logging",function(){
    return Activity::all();
});

