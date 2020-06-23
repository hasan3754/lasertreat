<?php

namespace App\Http\Controllers;

use App\map;

use Carbon\Carbon;

use Illuminate\Http\Request;

class mapController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/slider'))
            {
                mkdir('uploads/slider', 0777 , true);
            }
            $image->move('uploads/slider',$imagename);
        }else {
            $imagename = 'dafault.png';
        }

        $slider = new map();
        $slider->title = $request->title;
        $slider->image = $imagename;
        $slider->save();

        $message="map image created successfully";

        return view("map", compact("message"));

    }
}
