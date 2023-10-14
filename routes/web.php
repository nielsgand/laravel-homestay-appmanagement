<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\RoomsController;
use App\Http\Controllers\Home\RoomTypeController;
use App\Models\Booking;
use App\Models\Customer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Admin All Route
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');

    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
});

//Customer
Route::controller(CustomerController::class)->group(function () {
    Route::get('/logout', 'destroy')->name('admin.logout');
    Route::get('/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/show/profile', 'StoreProfile')->name('store.profile');
});



// Home Slide All Route
Route::controller(HomeSliderController::class)->group(function () {
    Route::get('/home/slide', 'HomeSlider')->name('home.slide');
    Route::post('/update/slide', 'UpdateSlider')->name('update.slider');
});


// About Page All Route
Route::controller(AboutController::class)->group(function () {
    Route::get('/about/page', 'AboutPage')->name('about.page');
    Route::post('/update/about', 'UpdateAbout')->name('update.about');
    Route::get('/about', 'HomeAbout')->name('home.about');

    Route::get('/about/multi/image', 'AboutMultiImage')->name('about.multi.image');
    Route::post('/store/multi/image', 'StoreMultiImage')->name('store.multi.image');

    Route::get('/all/multi/image', 'AllMultiImage')->name('all.multi.image');
    Route::get('/edit/multi/image/{id}', 'EditMultiImage')->name('edit.multi.image');
    Route::post('/update/multi/image', 'UpdateMultiImage')->name('update.multi.image');
    Route::get('/delete/multi/image/{id}', 'DeleteMultiImage')->name('delete.multi.image');
});

// Rooms All Route
Route::controller(RoomsController::class)->group(function () {
    Route::get('/room/page', 'AllRoom')->name('all.rooms');
    Route::get('/room/add', 'AddRoom')->name('add.rooms');
    Route::post('/store/room', 'StoreRoom')->name('store.room');
    Route::get('/edit/room/{id}', 'EditRoom')->name('edit.room');
    Route::post('/update/room', 'UpdateRoom')->name('update.room');
    Route::get('/delete/room/{id}', 'DeleteRoom')->name('delete.room');
    Route::get('/room/all', 'AllRoomDetails')->name('all.room.details');
    Route::get('/room/details/{id}', 'RoomDetails')->name('room.details');
});

// RoomType Route
Route::middleware('auth')->group(function () {
    Route::get('/roomtype/add', [RoomTypeController::class, 'create'])->name('roomtype.create');
    Route::get('/roomtype/all', [RoomTypeController::class, 'index'])->name('roomtype.index');
    Route::post('/roomtype/store', [RoomTypeController::class, 'store'])->name('roomtype.store');
    Route::get('/roomtype/{id}/edit', [RoomTypeController::class, 'edit'])->name('roomtype.edit');
    Route::post('/roomtype/update/{id}', [RoomTypeController::class, 'update'])->name('roomtype.update');
    Route::get('/roomtype/{id}/delete', [RoomTypeController::class, 'destroy1'])->name('roomtype.destroy');
});

//---- Booking ----//
Route::get('form/allbooking', [App\Http\Controllers\BookingController::class, 'AllBooking'])->middleware('auth')->name('form.allbooking');
Route::get('form/booking/edit/{booking_id}', [App\Http\Controllers\BookingController::class, 'BookingEdit'])->middleware('auth')->name('form.bookingedit');
Route::get('form/booking/create', [App\Http\Controllers\BookingController::class, 'BookingCreate'])->middleware('auth')->name('form.bookingcreate');
Route::post('form/booking/save', [App\Http\Controllers\BookingController::class, 'SaveRecord'])->middleware('auth')->name('save.record');
Route::get('form/booking/delete/{id}', [App\Http\Controllers\BookingController::class, 'Destroy'])->middleware('auth')->name('delete.record');
Route::post('booking/available-rooms/{checkin-date}',[App\Http\Controllers\BookingController::class,'available_rooms']);

// Customer Booking \\
Route::get('/booking', [App\Http\Controllers\BookingController::class, 'UserBooking'])->name('user.booking');
Route::post('/booking', [App\Http\Controllers\BookingController::class, 'UserBooking'])->name('user.booking');
Route::post('/datebooking', [App\Http\Controllers\BookingController::class, 'DataBooking'])->name('user.databooking');
Route::get('/payment', [App\Http\Controllers\BookingController::class, 'Payments'])->name('user.payment');

require __DIR__.'/auth.php';

