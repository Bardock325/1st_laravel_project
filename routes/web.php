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

Route::resource('/','DashboardController');

Route::get('/sum/{a}/{b}',function($a,$b){
	
	echo $a+$b;
})->where(['a' => '[0-9]+','b' => '[0-9]+']);

Route::get('/devide/{c}/{b}',function($c,$b){
	echo $c/$b;
})->where(['c' => '[0-9]+','b' => '[0-9]+']);

Route::get('/minus/{a}/{b}',function($a,$b){
	
	echo $a-$b;
})->where(['a' => '[0-9]+','b' => '[0-9]+']);

Route::get('/gon/{a}/{b}',function($a,$b){
	
	echo $a*$b;
})->where(['a' => '[0-9]+','b' => '[0-9]+']);

Route::get('/namta/{a}',function($a){
	
	for ($b=1; $b <=10 ; $b++) { 
		echo $a*$b;
	}
})->where(['a' => '[0-9]+']);

Route::get('/student',function(){
	
	return view('student');
});

Route::get('/test','Student@index');

Route::get('/try',function(){
	$a=DB::table('departmnet')->get();
	echo "<pre>";
	print_r($a);
});

Route::get('/try',function(){
	$a=DB::table('departmnet')->get()->toArray();
	echo "<pre>";
	print_r($a);
});

Route::get('/try',function(){
	$a=DB::table('departmnet')->first();
	echo "<pre>";
	print_r($a);
});

Route::get('/try',function(){
	$a=DB::table('departmnet')->find(3);
	echo "<pre>";
	print_r($a);
});

Route::get('/try',function(){
	$a=DB::table('departmnet')->where('department_name','Science')->get();
	echo "<pre>";
	print_r($a);
});

Route::get('/try',function(){
	$a=DB::table('departmnet')->where('department_name','Science')->value('status');
	echo "<pre>";
	print_r($a);
});
Route::resource('department','department');
Route::resource('student' , 'StudentController');
Route::resource('teacher' , 'TeacherController');

