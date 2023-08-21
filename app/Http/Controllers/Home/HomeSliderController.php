<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
use App\Event;
// use Image;
use Intervention\Image\Facades\Image;

class HomeSliderController extends Controller
{
    //
    public function HomeSlider() {
        $homeslide = HomeSlide::find(1);
        return view('admin.home_slide.home_slide_all',compact('homeslide'));
    }

    public function UpdateSlider(Request $request) {
        $slide_id = $request->id;
        if ($request->file('home_slide')) {
            $image = $request->file('home_slide');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(735,852)->save('upload/home_slider/'.$name_gen);
            $save_url = 'upload/home_slider/'.$name_gen;

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' =>$request->short_title,
                'video_url' => $request->video_url,
                'home_slide' => $save_url,
            ]);

            $notification = array(
                'message' => ' Home Slide Updated With Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        }else {
            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' =>$request->short_title,
                'video_url' => $request->video_url,
            ]);

            $notification = array(
                'message' => ' Home Slide Updated Without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }
    }
}
