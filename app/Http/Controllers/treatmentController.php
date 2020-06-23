<?php

namespace App\Http\Controllers;
use App\treone;
use App\tretwo;
use App\trethree;
use App\trefour;
use Carbon\Carbon;

use Illuminate\Http\Request;

class treatmentController extends Controller
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

        $slider = new treone();
        $slider->title = $request->titleone;
        $slider->image = $imagename;
        $slider->save();


        $message="treatments image one created successfully";

        return view("treatments", compact("message"));

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

        $slider = new tretwo();
        $slider->title = $request->titletwo;
        $slider->image = $imagename;
        $slider->save();


        $message="treatments image two created successfully";

        return view("treatments", compact("message"));

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

        $slider = new trethree();
        $slider->title = $request->titlethree;
        $slider->image = $imagename;
        $slider->save();

        $message="treatments image three created successfully";

        return view("treatments", compact("message"));

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

        $slider = new trefour();
        $slider->title = $request->titlefour;
        $slider->image = $imagename;
        $slider->save();


        $message="treatments image four created successfully";

        return view("treatments", compact("message"));

    }
}
