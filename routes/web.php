<?php
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Post;
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
  return view('home');
})->name('/');

Route::get('/simulator', function () {
  return view('simulator');
})->middleware('auth');
Route::get('/visaSimulator', function (Request $request) {

  return view('visaSimulator',['simulation' =>  session('simulation')]);
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware('auth');
Route::get('/talents', function () {
  return view('talents');
});
Route::get('/clients', function () {
  return view('clients');
});
Route::get('/getInTouch', function () {
  return view('getInTouch');
});
Route::get('/aboutUs', function () {
  return view('aboutUs');
});
Route::get('/faq', function () {
  return view('faq');
});

Route::get('/news', function () {
  $news= Post::paginate(9);

  return view('news',['news' => $news]);
});

Route::get('/news/search', 'HomeController@searchPost')->name('post.search');
Route::get('/news/{post}', 'HomeController@showPost')->name('post.show');

Route::get('/profile/fetch', 'SkillsController@fetch')->name('skills.fetch');

Route::get('/profile/fetch/contacts', 'ContactsController@fetch')->name('contacts.fetch');

Route::get('/profile/submit', 'SkillsController@submit')->name('skills.add');

Route::get('/simulatorMail', function (Request $request) {

  Mail::send(new App\Mail\SimulatorMail($request));
  session(['simulation' => 'true']);
})->name('simulatorMail');

Route::post('/ContactUs', function (Request $request) {

  Mail::send(new App\Mail\ClientMail($request));
  return redirect('/clients');
})->name('contactUs');
Route::post('/getInTouchMail', function (Request $request) {

  Mail::send(new App\Mail\GetInTouchMail($request));
  return redirect('/getInTouch');
})->name('getInTouchMail');
Auth::routes();

Route::post('admin/users/create/submit', 'HomeController@register')->name('users.add');

Route::get('admin/users/{id}/edit/submit', 'HomeController@update')->name('users.edit');

Route::delete('skill/', 'SkillsController@destroy')->name('skill.destroy');
Route::put('skill/', 'SkillsController@edit')->name('skill.edit');
Route::put('contract/', 'ContractsController@add')->name('contract.add');
Route::get('contract/', 'ContractsController@destroy')->name('contract.destroy');


Route::get('home', 'HomeController@index')->name('home');
Route::get('/profile/{user}', 'HomeController@show')->name('profile.show')->middleware('auth');
Route::put('/profile/edit', 'HomeController@edit')->name('profile.edit')->middleware('auth');
Route::get('/profile/{user}/contracts/{contract}', 'ContractsController@show')->name('contract.show');
Route::put('contract/{user}/{contract}', 'ContractsController@save')->name('contract.save');

Route::get('invoice/', 'ContractsController@addInvoice')->name('contract.addInvoice');
Route::get('/profile/{user}/contracts/{contract}/{invoice}', 'InvoicesController@showInvoice')->name('invoice.showInvoice');
Route::delete('invoice/', 'InvoicesController@destroy')->name('invoice.destroy');
Route::get('/profile/{user}/contracts/{contract}/pdf/{invoice}', 'InvoicesController@pdf')->name('invoice.pdf');

Route::get('/profile/{user}/pdf/contracts/{contract}', 'ContractsController@pdf')->name('contract.pdf');
Route::get('/profile/{user}/generate/contracts/{contract}', 'ContractsController@generation')->name('contract.generation');

Route::get('/profile/{user}/contracts/{contract}/save/{invoice}', 'InvoicesController@save')->name('invoice.save');
Route::get('/profile/{user}/contracts/{contract}/pdf/{invoice}', 'InvoicesController@pdf')->name('invoice.pdf');
Route::get('/profile/{user}/contracts/{contract}/generate/{invoice}', 'InvoicesController@generation')->name('invoice.generation');
Route::get('invoice/', 'InvoicesController@addInvoice')->name('invoice.addInvoice');

Route::group(['prefix' => 'admin'], function () {
  Voyager::routes();
});
