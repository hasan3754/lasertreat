<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\slider;
use App\conone;
use App\contwo;
use App\conthree;
use App\equone;
use App\equtwo;
use App\equthree;
use App\equfour;
use App\map;
use App\speone;
use App\spetwo;
use App\spethree;
use App\treone;
use App\tretwo;
use App\trethree;
use App\trefour;
use App\appointment;
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

        $conone=conone::latest('created_at')->first();
        $contwo=contwo::latest('created_at')->first();
        $conthree=conthree::latest('created_at')->first();
        $equone=equone::latest('created_at')->first();
        $equtwo=equtwo::latest('created_at')->first();
        $equthree=equthree::latest('created_at')->first();
        $equfour=equfour::latest('created_at')->first();
        $map=map::latest('created_at')->first();
        $slider=slider::latest('created_at')->first();
        $speone=speone::latest('created_at')->first();
        $spetwo=spetwo::latest('created_at')->first();
        $spethree=spethree::latest('created_at')->first();
        $treone=treone::latest('created_at')->first();
        $tretwo=tretwo::latest('created_at')->first();
        $trethree=trethree::latest('created_at')->first();
        $trefour=trefour::latest('created_at')->first();

        $appointment=appointment::latest('created_at')->first();





        $glider = slider::orderBy('id', 'ASC')->first();
        if($glider!=null){
        $glider->active='active';
        $glider->save();
        $slider = slider::all();
        return view("welcome", compact("slider","conone","contwo","conthree","equone","equtwo","equthree","equfour","map","slider","speone","spetwo","spethree","treone","tretwo","trethree","trefour","appointment"));
        }
        else{
            $slider='no slider';
            return view("welcome", compact("slider","conone","contwo","conthree","equone","equtwo","equthree","equfour","map","slider","speone","spetwo","spethree","treone","tretwo","trethree","trefour","appointment"));
        }

    }

}
