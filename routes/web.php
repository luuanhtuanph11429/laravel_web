<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
// thu muc view : resources/view/"welcome".blade.php
Route::get('/', function () {
    $students=[
        [
            'name'=>'tuanlaph11429',
            'age'=>20,
            'class'=>'web16201',
            'id'=>'1'
        ],
        [
            'name'=>'tuanlaph1112',
            'age'=>20,
            'class'=>'web16201',
            'id'=>'2'
        ],
    ];
    return view('welcome',['students'=>$students]);
});
//thu muc view: resources/views/auth/login/login.blade.php
Route::get('/login',function(){
     // dd('login view');
     $email= 'tuanlaph11429@fpt.edu.vn';
     $password='123';
    //return view('auth.login')->with('email',$email);
    // view( ten view ,mang gia tri truyen sang view)   
    return view('auth.login',[
        'email'=>$email,
        'password'=>$password
    ]);
});
// Route::get('/home',function(){
   
//     return view('welcome',['students'=>$students]);
// });

//route kem query string va params
// voi tham so truyen vao la url thi function se nhan 1 tham so tuong ung
Route::get('/users/{usreId}/{username?}',function(
    Request $request,
    $userId,
    $username='profile' ){
    dd($userId,$username,$request->all());
});