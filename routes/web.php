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

// use App\Http\Controllers\FirstController;
// use App\Http\Controllers\Front\UserController;

Route::get('/', function () {
    //passing data from route to the view page called welcome
    return view('welcome')->with('obj');
});
Auth::routes(['verify' => true]);

//user must be authonticated and also Email verified to be login
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/landing', function () {
    //passing data from route to the view page called welcome
    return view('landing');
});
Route::get('/about', function () {
    //passing data from route to the view page called welcome
    return view('about');
});
//route parameters
Route::get('/test1', function () {
    //route not good way to define data and variable in route,just if you define a const variable
    $data=[];
    $data['id']=5;
    $data['name']='faisal';
    return $data;
});
//route parameters
Route::get('/test2/{id}', function ($id) {
    return 'welcome with route test 2 with id required'.$id;
});

Route::get('/test3/{id?}', function () {
    return 'welcome route test 3 with id or without it,mean that the ID is option';
});

//route name
Route::get('/show-number/{id}', function ($id) {
    return 'welcome route to show number'.$id;
})->name('a');

Route::get('/show-string/{id?}', function () {
    return 'welcome route show string';
})->name('b');

//naming routing and namespaces in lesson no 14

Route::namespace('Front')->group(function(){//namespace must be first letter is capital

    //all routes only access controller or method in folder name  Front

    route::get('users','UserController@showUserName');
});
//lesson no 15 route group ,perfix,middleware
// Route::prefix('users')->group(function(){
//         Route::get('show','UserController@showUserName');
//         Route::delete('delete','UserController@showUserName');
//         Route::get('edit','UserController@showUserName');
//         Route::put('update','UserController@showUserName');
// });

// Route::group(['prefix'=>'users','middleware'=>'auth'],function(){

//         Route::get('/',function(){
//                 return('welcome from prefix of users route');
//         });
//     //set of routes
//     Route::get('show','UserController@showUserName');
//     Route::delete('delete','UserController@showUserName');
//     Route::get('edit','UserController@showUserName');
//     Route::put('update','UserController@showUserName');

// });

// Route::get('check',function(){
//     return 'middleware';
// })->middleware('auth');


// Route::get('second1','Front\SecondController@ShowString1')->middleware('auth');//this auth will applaied for this route only

// Route::get('second2','Front\SecondController@ShowString2');

// Route::get('second3','Front\SecondController@ShowString3');


// Route::get('login',function(){
//     return 'must be login to browse this page';
// });

// Route::resource('news','NewsController');


// Route::get('index','Front\UserController@getIndex');



