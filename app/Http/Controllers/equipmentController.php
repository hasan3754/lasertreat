<?php

namespace App\Http\Controllers;

use App\equone;
use App\equtwo;
use App\equthree;
use App\equfour;
use Carbon\Carbon;

use Illuminate\Http\Request;

class equipmentController extends Controller
{
    public function storeone(Request $request)
    {
        $this->validate($request,[
            'titleone' => 'required',
            'imageone' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('imageone');
        $slug = str_slug($request->titleone);
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

        $slider = new equone();
        $slider->title = $request->titleone;
        $slider->image = $imagename;
        $slider->save();

    }






    public function storetwo(Request $request)
    {
        $this->validate($request,[
            'titletwo' => 'required',
            'imagetwo' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('imagetwo');
        $slug = str_slug($request->titletwo);
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

        $slider = new equtwo();
        $slider->title = $request->titletwo;
        $slider->image = $imagename;
        $slider->save();

    }







    public function storethreee(Request $request)
    {
        $this->validate($request,[
            'titlethree' => 'required',
            'imagethree' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('imagethree');
        $slug = str_slug($request->titlethree);
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

        $slider = new equthree();
        $slider->title = $request->titlethree;
        $slider->image = $imagename;
        $slider->save();

    }



    public function storefour(Request $request)
    {
        $this->validate($request,[
            'titlefour' => 'required',
            'imagefour' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('imagefour');
        $slug = str_slug($request->titlethree);
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

        $slider = new equfour();
        $slider->title = $request->titlefour;
        $slider->image = $imagename;
        $slider->save();

    }
}
