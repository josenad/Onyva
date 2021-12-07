<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Coordinates;

use Carbon\Carbon;

use App\Http\Controllers\ProfileController;

use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class EventController extends BaseController
{
    use ValidatesRequests;

    public function create(Request $request){

        $request->validate([
            'title' => ['required','string','max:255'],
            'addressEvent' => ['required'],
            'dateEvent' => ['required'],
            'timeEvent' => ['required'],
            'eventDescription' => ['required'],
        ]);

        $resultRadio = 1;

        if(in_array('radioPrivate', $request->get('radioType'))){
            $resultRadio = 2;
        }

        $strDate = $request->dateEvent;
        $strTime = $request ->timeEvent;
        $strAllDate = $strDate . " " . $strTime;
        $date = new Carbon( $strAllDate);

        $filename = time() . "." . $request->imageEvent->extension();

        $path = $request->file('imageEvent')->storeAs('img_event',$filename,'public');
    
        $coordinate = Coordinates::create([
            'address' => $request->addressEvent,
        ]);

        $coordinate->save();

        Event::create([
            'name' => $request->title,
            'date' => $date,
            'image' => $path,
            'description' => $request->eventDescription,
            'coordinates_event_id' => $coordinate->id,
            'category_event_id' => $request->category_event,
            'event_type_id'=> $resultRadio,
            'user_id' => Auth::id(),
        ]);

        return redirect()->action([ProfileController::class, 'index']);
    }





}
