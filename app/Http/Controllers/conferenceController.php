<?php

namespace App\Http\Controllers;
use App\conone;
use App\contwo;
use App\conthree;
use Carbon\Carbon;

use Illuminate\Http\Request;

class conferenceController extends Controller
{
    public function storeone(Request $request)
    {
        $this->validate($request,[
            'titleone' => 'required',
            'paragraphone' => 'required',
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

        $slider = new conone();
        $slider->title = $request->titleone;
        $slider->paragraph = $request->paragraphone;
        $slider->image = $imagename;
        $slider->save();

    }






    public function storetwo(Request $request)
    {
        $this->validate($request,[
            'titletwo' => 'required',
            'paragraphtwo' => 'required',
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

        $slider = new contwo();
        $slider->title = $request->titletwo;
        $slider->paragraph = $request->paragraphtwo;
        $slider->image = $imagename;
        $slider->save();

    }







    public function storethree(Request $request)
    {
        $this->validate($request,[
            'titlethree' => 'required',
            'paragraphthree' => 'required',
            'imagethree' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('imagethree');
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

        $slider = new conthree();
        $slider->title = $request->titlethree;
        $slider->paragraph = $request->paragraphthree;
        $slider->image = $imagename;
        $slider->save();

    }
}
