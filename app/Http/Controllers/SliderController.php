<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\slider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class SliderController extends Controller
{
    

    public function store(Request $request)
    {
        $this->validate($request,[
            'SliderName' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->SliderName);
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

        $slider = new slider();
        $slider->SliderName = $request->SliderName;
        $slider->image = $imagename;
        $slider->save();

        $slider = slider::all();
        return view('table',['slider'=>$slider]);
    }


    public function delete($id)
    {
        
        $slider = slider::find($id);

        if ($slider) {
            $slider->delete();
        }

      

        return Redirect::route('table');


    
    }



    public function show()
    {
        $glider = slider::orderBy('id', 'ASC')->first();
        if($glider!=null){
        $glider->active='active';
        $glider->save();
        $slider = slider::all();
        return view('welcome',['slider'=>$slider]); 
        }
        else{
            $slider='no slider';
           return view('welcome',['slider'=>$slider]);;
        }

    }

}
