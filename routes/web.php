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
// Route::get('/users/{usreId}/{username?}',function(
//     Request $request,
//     $userId,
//     $username='profile' ){
//     dd($userId,$username,$request->all());
// });


Route::get('user/{id}', function (Request $request, $id){
    $dataUrl = $request->all();
    $users = [
        [
            'name'=>'luu anh tuan',
            'height'=>170,
            'weight'=>100,
            'age'=>20,
            'gender'=>'nam',
            'avatar'=>'https://i.pinimg.com/564x/94/9b/8d/949b8d8d9229693ba9d53b054b738e2a.jpg'
        ],
        [
            'name'=>'anh tuan luu',
            'height'=>111,
            'weight'=>80,
            'age'=>21,
            'gender'=>'nu',
            'avatar'=>'https://i.pinimg.com/564x/94/9b/8d/949b8d8d9229693ba9d53b054b738e2a.jpg'
        ],
        [
            'name'=>'anh tuan luu 312312',
            'height'=>11,
            'weight'=>820,
            'age'=>21,
            'gender'=>'nu',
            'avatar'=>'https://i.pinimg.com/564x/94/9b/8d/949b8d8d9229693ba9d53b054b738e2a.jpg'
        ],
    ];
    return view('user',compact('users','dataUrl' , 'id'));
});



