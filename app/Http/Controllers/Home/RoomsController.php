<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rooms;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
// use Image;

class RoomsController extends Controller
{
    public function AllRoom() {

        $room = Rooms::latest()->get();
        return view('admin.rooms.room_all',compact('room'));

    }

    public function AddRoom() {
        return view('admin.rooms.room_add');
    }

    public function StoreRoom(Request $request) {

        $request->validate([
            'room_name' => 'required',
            'room_title' => 'required',
            'room_description' => 'required',
        ],[
            'room_name.required' => 'Rooms Name is Required',
            'room_title.required' => 'Rooms Title is Required',
        ]);

            $image = $request->file('room_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(1020,519)->save('upload/rooms/'.$name_gen);
            $save_url = 'upload/rooms/'.$name_gen;

            Rooms::insert([
                'room_name' => $request->room_name,
                'room_title' =>$request->room_title,
                'room_description' => $request->room_description,
                'room_image' => $save_url,
                'created_at' => Carbon::now(),

            ]
            );

            $notification = array(
                'message' => ' Room Add Data Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.rooms')->with($notification);
    }


    public function EditRoom($id) {

        $room = Rooms::findOrFail($id);
        return view('admin.rooms.room_edit' ,compact('room'));
    }




    public function UpdateRoom(Request $request) {
        $room_id = $request->id;
        if ($request->file('room_image')) {
            $image = $request->file('room_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(1020,519)->save('upload/rooms/'.$name_gen);
            $save_url = 'upload/rooms/'.$name_gen;

            Rooms::findOrFail($room_id)->update([
                'room_name' => $request->room_name,
                'room_title' =>$request->room_title,
                'room_description' => $request->room_description,
                'room_image' => $save_url,
            ]);

            $notification = array(
                'message' => ' Room Updated With Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.rooms')->with($notification);

        }else {
            Rooms::findOrFail($room_id)->update([
                'room_name' => $request->room_name,
                'room_title' =>$request->room_title,
                'room_description' => $request->room_description,
            ]);

            $notification = array(
                'message' => ' Room Updated Without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.rooms')->with($notification);
        }
    }

    public function DeleteRoom($id) {

        $room = Rooms::findOrFail($id);
        $img = $room->room_image;
        unlink($img);

        Rooms::findOrFail($id)->delete();

        $notification = array(
            'message' => ' Room Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function AllRoomDetails() {
        $room = Rooms::all();
        return view('frontend.room_details_all',compact('room'));
    }

    public function RoomDetails($id) {
        $allroom = Rooms::findOrFail($id);
        return view('frontend.room_details' ,compact('allroom'));
    }


}
