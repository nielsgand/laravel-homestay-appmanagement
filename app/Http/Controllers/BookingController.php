<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // view page all booking
    public function AllBooking() {
        $allBooking = Booking::all();
        return view('admin.booking.allbooking', compact('allBooking'));
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
            // 'booking_id'        =>'required|string|max:20',
            'booking_name'      =>'required|string|max:150',
            'room_type'         =>'required|string|max:100',
            'total_numbers'     =>'required|string|max:50',
            'arrival_date'      =>'required|date',
            'depature_date'     =>'required|date',
            'email'              =>'required|string|max:100',
            'ph_number'          =>'required|string|max:15',
        ],[
            'booking_name.required' => 'Booking Name is Required',
            'room_type.required' => 'Room Type is Required',
            'total_numbers.required' => 'Room Type is Required',
            // 'arrival_date.required' => 'Room Type is Required',
            // 'depature_date.required' => 'Room Type is Required',
            'email.required' => 'Email is Required',
            'ph_number.required' => 'Phone number is Required',
        ]);

        Booking::insert([
            // 'booking_id'        => $request->booking_id,
            'booking_name'      => $request->booking_name,
            'room_type'         => $request->room_type,
            'total_numbers'     => $request->total_numbers,
            'arrival_date'      => $request->arrival_date,
            'depature_date'     => $request->depature_date,
            'email'             => $request->email,
            'ph_number'         => $request->ph_number,
            'created_at'        => Carbon::now()
        ]);

        // dd($request);

        $notification = array(
            'message' => ' Booking Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('form.allbooking')->with($notification);
    }



    //view page edt booking
    public function BookingEdit(Request $request) {
        return view('admin.booking.bookingedit');
    }

    public function Status() {

    }

    // //======================================================== Frontend Function =============================================================================//

    //view page user booking
    public function UserBooking(Request $request) {

        // dd($request);

        $userbooking = $request;

        return view('frontend.user_booking', compact('userbooking'));
    }

    //user datepicker
    public function Databooking(Request $request) {
        // dd($request);

        Booking::insert([
            // 'booking_id'        => $request->booking_id,
            'booking_name'      => $request->booking_name,
            'room_type'         => $request->room_type,
            'room_id'           => $request->room_id,
            'total_numbers'     => $request->total_numbers,
            'arrival_date'      => $request->arrival_date,
            'depature_date'     => $request->depature_date,
            'email'             => $request->email,
            'ph_number'         => $request->ph_number,
            'created_at'        => Carbon::now()
        ]);

        Customer::insert([

            'name'      => $request->booking_name,
            'email'             => $request->email,
            'phonenumber'         => $request->ph_number,
            'created_at'        => Carbon::now()
        ]);

        return view('frontend.user_booking', compact('userbooking'));

    }


}
