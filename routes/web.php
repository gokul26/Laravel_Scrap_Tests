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

    // $post= new App\posts_new;
    // $post->post_name='one';
    // $post->post_desc='myDescription';
    // $post->created='12-12-2012';
    // $post->save();
    // $post = App\posts_new::find(1);
    // $post->post_name='changed';
    // $post->save();
    // return $post->post_name;

    $myDates = array('22-2-2018','12-4-12');
    return view('welcome_my', array('myName'=>'Goks', 'title'=>'Available', 'Dates'=>$myDates));
});

Route::get('about', function () {
    return view('welcome');
});

Route::get('about/{subject}', function ($subject) {
    return 'The subject about'.$subject;
});

Route::get('about/data/{subject}', function ($subject) {
    return "The data subject about {$subject}";
});
Route::get('signup', function () {
    return view('signup_form');
});
Route::post('thanks', function () {

    $emailid = Input::get('email');

    return view('thanks')->with('emailid',$emailid);
});