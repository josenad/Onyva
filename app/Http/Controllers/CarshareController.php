<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Event;
use App\Models\Coordinates;
use App\Models\Participation_event;
use App\Models\Carshare;
use App\Models\Participation_carshare;

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

class CarshareController extends BaseController
{
    use ValidatesRequests;

    public function create(Request $request){

        $request->validate([
            'nameCarshare' => ['required','string','max:255'],
            'capacity' => ['required'],
            'phoneCarshare' => ['required'],
            'meeting' => ['required'],
        ]);

        $coordinate = Coordinates::create([
            'address' => $request->meeting
        ]);
        $coordinate->save();

        $carshare = Carshare::create([
            'name' => $request->nameCarshare,
            'capacity' => $request->capacity,
            'phone' => $request->phoneCarshare,
            'date' => $request->heure,
            'coordinate_id' => $coordinate->id,
            'user_id'=> Auth::id(),
            'event_id' => $request->id_event
        ]);

        $carshare->save();

        $participation_Carshare = Participation_carshare::create([
            'state' => 1,
            'carshare_id' => $carshare->id,
            'user_id' => Auth::id()
        ]);

        $participation_Carshare->save();
        
        return redirect()->action(
            [EventController::class,'showEvent'] , ['id' => $request->id_event]
        );
    }


    public function joinCarshare(Request $request){
        $participation_Carshare = Participation_carshare::create([
            'state' => 1,
            'user_id' => Auth::id(),
            'carshare_id' => $request->id_carshare
        ]);
        $participation_Carshare->save();
        
        return redirect()->action(
            [EventController::class,'showEvent'] , ['id' => $request->id_event]
        );
    }


}
