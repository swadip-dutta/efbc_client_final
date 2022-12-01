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
    return view('auth/login');
});


Route::get('/mail', function () {
    return view('mail/conform_mail');
});


// Attendee
Route::get('/add-attendee', [App\Http\Controllers\AttendeeController::class, 'index'])->name('add-attendee');
Route::get('/list-attendee', [App\Http\Controllers\AttendeeController::class, 'store'])->name('list-attendee');
Route::get('/list_trash_regis', [App\Http\Controllers\AttendeeController::class, 'list_trash_regis'])->name('list_trash_regis');
Route::get('/edit-attendee/{id}', [App\Http\Controllers\AttendeeController::class, 'edit'])->name('edit-attendee');
Route::post('/regist_create', [App\Http\Controllers\AttendeeController::class, 'create'])->name('regist_create');
Route::post('/attend_update', [App\Http\Controllers\AttendeeController::class, 'update'])->name('attend_update');
Route::post('/SelectedRegisterDelete', [App\Http\Controllers\AttendeeController::class, 'SelectedRegisterDelete'])->name('SelectedRegisterDelete');


// Register
Route::get('/register_list', [App\Http\Controllers\AttendListController::class, 'register_list_func'])->name('regAttendeeList');
Route::get('/register_destroy/{id}', [App\Http\Controllers\AttendListController::class, 'register_destroy'])->name('register_destroy');
Route::get('/permanant_reg_destroy/{id}', [App\Http\Controllers\AttendeeController::class, 'permanant_reg_destroy'])->name('permanant_reg_destroy');
Route::get('/permanant_reg_restore/{id}', [App\Http\Controllers\AttendeeController::class, 'permanant_reg_restore'])->name('permanant_reg_restore');
Route::get('/attendee-list', [App\Http\Controllers\AttendeeController::class, 'attendee_list'])->name('attendee.list');
Route::post('/selected/category/delete', [App\Http\Controllers\AttendListController::class, 'SelectedCategoryDelete'])->name('SelectedCategoryDelete');
Route::get('/front_register_pending', [App\Http\Controllers\AttendListController::class, 'front_register_pending'])->name('front_register_pending');
Route::get('/front_register_paid', [App\Http\Controllers\AttendListController::class, 'front_register_paid'])->name('front_register_paid');

// Category
Route::get('/view-category', [App\Http\Controllers\GroupCategoryController::class, 'index'])->name('view-category');
Route::get('/add-subcategory', [App\Http\Controllers\GroupSubCategoryController::class, 'index'])->name('add-subcategory');
Route::get('/edit-subcategory/{id}', [App\Http\Controllers\GroupSubCategoryController::class, 'edit'])->name('edit-subcategory');
Route::post('/update_subcategory', [App\Http\Controllers\GroupSubCategoryController::class, 'update_subcategory'])->name('update_subcategory');

// Group
Route::get('/add-g-group', [App\Http\Controllers\GroupListController::class, 'add_g_group'])->name('add-g-group');
Route::get('/add-f-group', [App\Http\Controllers\GroupListController::class, 'add_f_group'])->name('add-f-group');
Route::get('/add-n-group', [App\Http\Controllers\GroupListController::class, 'add_n_group'])->name('add-n-group');
Route::get('/add-m-group', [App\Http\Controllers\GroupListController::class, 'add_m_group'])->name('add-m-group');


// Group View All
Route::get('/golf_view', [App\Http\Controllers\GroupListController::class, 'golf_view'])->name('golf_view');
Route::get('/fishing_view', [App\Http\Controllers\GroupListController::class, 'fishing_view'])->name('fishing_view');
Route::get('/networking_view', [App\Http\Controllers\GroupListController::class, 'networking_view'])->name('networking_view');
Route::get('/messaging_view', [App\Http\Controllers\GroupListController::class, 'messaging_view'])->name('messaging_view');


// Group Edit All
Route::get('/golf_edit/{id}', [App\Http\Controllers\GroupListController::class, 'golf_edit'])->name('golf_edit');
Route::post('/grp_update', [App\Http\Controllers\GroupListController::class, 'update'])->name('grp_update');
Route::get('/fish_edit/{id}', [App\Http\Controllers\GroupListController::class, 'fish_edit'])->name('fish_edit');
Route::get('/message_edit/{id}', [App\Http\Controllers\GroupListController::class, 'message_edit'])->name('message_edit');
Route::get('/network_edit/{id}', [App\Http\Controllers\GroupListController::class, 'network_edit'])->name('network_edit');
Route::post('/post-subcategory', [App\Http\Controllers\GroupSubCategoryController::class, 'create'])->name('post-subcategory');
Route::post('/post_group', [App\Http\Controllers\GroupListController::class, 'post_group'])->name('post_group');


// Group List Download
Route::get('/group/excel/download', [App\Http\Controllers\GroupListController::class, 'GroupExcelDownloadGolf'])->name('GroupExcelDownloadGolf');
Route::get('/group/excel/download/fish', [App\Http\Controllers\GroupListController::class, 'GroupExcelDownloadFish'])->name('GroupExcelDownloadFish');
Route::get('/group/excel/download/message', [App\Http\Controllers\GroupListController::class, 'GroupExcelDownloadMessage'])->name('GroupExcelDownloadMessage');
Route::get('/group/excel/download/network', [App\Http\Controllers\GroupListController::class, 'GroupExcelDownloadNetwork'])->name('GroupExcelDownloadNetwork');
// Price
Route::get('make_price', [App\Http\Controllers\PriceController::class, 'index'])->name('make_price');
Route::post('update_price', [App\Http\Controllers\PriceController::class, 'update_price'])->name('update_price');

// Payment Details
Route::get('payment_list', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment_list');
Route::get('make_payment', [App\Http\Controllers\PaymentController::class, 'create'])->name('create');
Route::post('authorize_make_payment', [App\Http\Controllers\PaymentController::class, 'authorize_make_payment'])->name('authorize_make_payment');


// PAYMENT METHOD
Route::get('test-authorize-card-payment', [App\Http\Controllers\AuthorizenetPayment::class, 'authorizeCardPayment']);
Route::post('test-process-authorize-card-payment', [App\Http\Controllers\AuthorizenetPayment::class, 'processAuthorizeCardPayment']);


// Frontend Registration
Route::get('/front_register', [App\Http\Controllers\FrontendController::class, 'index'])->name('front_register');
Route::post('/front_register_create', [App\Http\Controllers\FrontendController::class, 'front_register_create'])->name('front_register_create');
Route::get('/front_card_payment/{id}/{payment_amount}', [App\Http\Controllers\FrontendController::class, 'front_card_payment'])->name('front_card_payment');
Route::get('/front_make_payment', [App\Http\Controllers\FrontendController::class, 'front_make_payment'])->name('front_make_payment');
Route::post('front_auth_payment', [App\Http\Controllers\FrontendController::class, 'front_auth_payment'])->name('front_auth_payment');




// Company Settings all urls
Route::get('/settings', [App\Http\Controllers\SettingController::class, 'index'])->name('settings.index');
Route::post('update', [App\Http\Controllers\SettingController::class, 'update'])->name('settings.update');

// User Settings
Route::get('user', [App\Http\Controllers\SettingController::class, 'user_index'])->name('user.index');

Route::post('userupdate', [App\Http\Controllers\SettingController::class, 'user_update'])->name('user.update');



// Front Attend List

Route::get('/front_att_list', [App\Http\Controllers\FrontendController::class, 'front_att_list'])->name('front_att_list');
Route::get('/front_golf_list', [App\Http\Controllers\FrontendController::class, 'front_golf_list'])->name('front_golf_list');
Route::get('/front_fishing_list', [App\Http\Controllers\FrontendController::class, 'front_fishing_list'])->name('front_fishing_list');
Route::get('/front_networking_list', [App\Http\Controllers\FrontendController::class, 'front_networking_list'])->name('front_networking_list');
Route::get('/front_messaging_list', [App\Http\Controllers\FrontendController::class, 'front_messaging_list'])->name('front_messaging_list');


Route::get('/dashboard', function () {
    return view('Backend/dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
