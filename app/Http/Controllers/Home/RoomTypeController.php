<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    //
    public function index() {
        $data=RoomType::all();
        return view('admin.room_types.room_type_all',compact('data'));
    }

    //
    public function create() {
        return view('admin.room_types.room_type_add');
    }

    public function store(Request $request) {
        $data=new RoomType;
        $data->room_type=$request->room_type;
        $data->room_price=$request->room_price;
        $data->save();

        return redirect('roomtype/all')->with('success','เพิ่มข้อมูลประเภทห้องเรียบร้อย');
    }

    //
    public function edit($id) {
        $data=RoomType::find($id);
        return view('admin.room_types.room_type_edit',compact('data'));
    }

    public function update(Request $request, $id) {
        $data=RoomType::find($id);
        $data->room_type=$request->room_type;
        $data->room_price=$request->room_price;
        $data->save();

        return redirect('roomtype/all')->with('success','แก้ไขข้อมูลประเภทห้องเรียบร้อย');
    }

    public function destroy1($id) {
        RoomType::where('id',$id)->delete();
        return redirect('/roomtype/all');

    }
}
