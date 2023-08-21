<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // view page all booking
    public function AllBooking() {

        return view('admin.booking.allbooking');
    }

    //view page edit booking
    public function BookingCreate() {
        return view('admin.booking.booking_create');
    }

    // //store booking
    // public function StoreBooking(Request $request) {
    //     $request->validate([
    //         'booking_id' => 'required',
    //         'booking_name' => 'required',
    //         'total_numbers' => 'required',
    //         'email' => 'required',
    //         'ph_number' => 'required',
    //     ]);

    //     Booking::insert([
    //         'booking_id' => $request->booking_id,
    //         'booking_name' => $request->booking_name,
    //         'room_type' => $request->room_type,
    //         'total_numbers' => $request->total_numbers,
    //         'email' => $request->email,
    //         'ph_number' => $request->ph_number,
    //         'created_at' =>Carbon::now(),
    //     ]);
    // }

    // save record
    public function SaveRecord(Request $request) {
        $request->validate([
            'booking_id'        =>'required|string|max:20',
            'booking_name'      =>'required|string|max:150',
            'room_type'         =>'required|string|max:100',
            'total_numbers'     =>'required|string|max:50',
            'arrival_date'      =>'required|string|max:255',
            'depature_date'     =>'required|string|max:255',
            'email'             =>'required|string|max:100',
            'ph_number'         =>'required|string|max:15',
        ]);
    }

    //view page edit booking
    public function BookingEdit() {
        return view('admin.booking.bookingedit');
    }
}
