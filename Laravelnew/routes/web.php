<?php

use Illuminate\Support\Facades\Route;
use App\Models\Subject;

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

/*Route::get('/hello-world', function () {
    return view('hello_world');
});

Route::get('/about_us', function () {
    return view('about_us',['name' => 'Laravel 6.0 範例']);
});

Route::get('/inspire', 'App\Http\Controllers\InspiringController@inspire');*/

/*Route::get('/test', function(){
    return App\Post::all();
});*/

/*Route::get('/test', function(){
    return App\Post::find(1);
});*/

/*Route::get('/test', function(){
    $post = App\Post::find(1);
    $post->content = 'Laravel demo 6.0 day 11';
    $post->save();
    return $post;
});*/

/*Route::get('/test', function(){
    $posts = App\Post::all();
    $posts->each->update([
        'content' => 'Laravel demo 6.0 day 11 test'
    ]);
    return $posts;
});*/

/*Route::get('/test', function(){
$post = new App\Post;
$post->content = 'Laravel demo 6.0 day 11';
$post->save();
return $post;
});*/

/*Route::get('/test', function(){
    $post = App\Post::find(1);
    $post->delete();
});*/

/*Route::get('/test', function(){
    $tag = App\Models\Tag::find(1);
    $posts = $tag->posts;
    return $posts;
});*/



Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/login', function(){
    var_dump(Auth::check());
});

Route::get('/login', function(){
    echo Auth::user();
});


/*Route::get('/', 'PageController@index')->middleware('userAuth');

Route::post('login', 'UserController@login');

Route::get('login', 'UserController@showLoginPage');

Route::get('logout', 'UserController@logout');*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//日姊

Route::get('bandroom', '\App\Http\Controllers\BandroomController@index');
Route::get('/bandroom_list/{band_id}','\App\Http\Controllers\BandroomController@show');
Route::get('/bandroom_lend/{band_id}','\App\Http\Controllers\BandroomController@create');
Route::get('/bandroom_check/{id}', '\App\Http\Controllers\BandroomController@bandroom_check');
Route::get('/bandroom_sure/{id}', '\App\Http\Controllers\BandroomController@bandroom_sure');
Route::get('/bandroom_error/{id}', '\App\Http\Controllers\BandroomController@bandroom_error');

    
Route::get('/test', function(){
        return App\Models\Bandroom::all();
    });


//京穎

Route::get('/musical_intr/{id}', 'App\Http\Controllers\MusicalController@musical_intr');

Route::resource('musical', 'App\Http\Controllers\MusicalController');

Route::get('/musical_reserve/{id}', 'App\Http\Controllers\MusicalController@musical_reserve');

Route::get('/musical_reserve_add/{id}', 'App\Http\Controllers\MusicalController@musical_reserve_add');

Route::get('/musical_sure/{id}', 'App\Http\Controllers\MusicalController@musical_sure');

//活動公告
Route::get('/announce', 'App\Http\Controllers\AnnounceController@index');
Route::get('/announce_present/{id}', 'App\Http\Controllers\AnnounceController@show');

/*Route::get('musical', function () {
    // 只有認證過的使用者能進來這裡...
})->middleware('auth');*/



//米米

Route::get('teachers', '\App\Http\Controllers\TeacherController@index');
Route::get('/teacher_intr/{teacher_id}','\App\Http\Controllers\TeacherController@show');
Route::get('/teacher_res/{teacher_id}','\App\Http\Controllers\TeacherController@create');
Route::get('/teacher_check/{id}', '\App\Http\Controllers\TeacherController@teacher_check');
Route::get('/teacher_sure/{id}', '\App\Http\Controllers\TeacherController@teacher_sure');
Route::get('/teacher_error/{id}', '\App\Http\Controllers\TeacherController@teacher_error');
