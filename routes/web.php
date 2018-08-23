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

Route::get('/', function () {
//    return view('welcome');
//    echo date("Y-m-d H:i:s");
    echo Config::get("app.timezone");
});
Route::get('/index',function (){
    echo "这是路由的使用";
});
Route::post('/insert',function (){
    echo 'this is laravel';
});
Route::get('/add',function (){
    return view('form');
});
Route::get('/ajax',function (){
    return view('ajax');
});
Route::get('/doajax',function (){
    echo '666';
});
Route::get('/ajaxs',function (){
    return view('ajaxs');
});
Route::post('/doajaxs',function (){
    echo "this is sha bi";
});
Route::get('/admin/{id}',function ($id){
    echo "商品的id为".$id;
});
Route::get('/admins/{name}',function ($name){
    echo "文章名字为".$name;
})->where("name",'[a-z]+');
Route::get('/user/{name}-{id}',function ($name,$id){
    echo $name.":".$id;
});
Route::get('/home/person',['as'=>'person',function(){
    echo "这是我们路由的规则";
}]);
Route::get('/a',function (){
    echo route('person');
});
Route::get('/login',function (){
    return view('login');
});
Route::get('/adminss/user',function (){
    echo "这是后天用户模块";
})->middleware('login');
Route::group(['middleware'=>'login'],function (){
    Route::get('/shop',function (){
        echo "这是我们的后台商品模块";
    });
    Route::get('/order',function (){
        echo "这是我们的后台订单模块";
    });
});
Route::get('/user','Admin\UserController@index');
Route::get('/add','Admin\UserController@add');
Route::get('/userdelete/{id}','Admin\UserController@delete');
Route::get('/usersinfo','Admin\UserController@info')->middleware('login');
Route::group(["middleware"=>"login"],function (){
    Route::get('/userindex1','Admin\UserController@index1');
    Route::get('/userindex2','Admin\UserController@index2');
});
//Route::resource('/userss','Admin\UsersController');
Route::resource('/req','ReqController');
Route::resource('/file','FileController');
Route::resource('/vie','VieController');
Route::resource('/admins','Admin\AdminController');
Route::resource('/adminuser','Admin\UserController');
Route::resource('/db','DbController');

