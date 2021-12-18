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

        $newEvent = Event::create([
            'name' => $request->title,
            'date' => $date,
            'image' => $path,
            'description' => $request->eventDescription,
            'coordinates_event_id' => $coordinate->id,
            'category_event_id' => $request->category_event,
            'event_type_id'=> $resultRadio,
            'user_id' => Auth::id(),
        ]);

        $newEvent->save();

        $participation = Participation_event::create([
            'event_id' => $newEvent->id,
            'user_id' => Auth::id(),
        ]);

        $participation->save();

        return redirect()->action(
            [EventController::class,'showEvent'] , ['id' => $newEvent->id]
        );
    }

    public function showEvent($id) {

        $event = Event::find($id);

        $alreadyParticipate = Participation_event::where('event_id','=',$id)->where('user_id','=',Auth::id())->first();

        if( Participation_event::where('event_id','=',$id)->where('user_id','=',Auth::id())->first() === null){
            $already = 0;
        }else{
            $already = 1;
        }

        $listCarshare = Carshare::where('event_id','=',$id)->get();

        $listCarshareWithNb = array();

        foreach($listCarshare as $car){
            $nb = Participation_carshare::where('carshare_id','=',$car->id)->get();
            array_push($listCarshareWithNb,count($nb));
        }
        
        $listFinalCarshare = array();
        $indice = 0;
        foreach($listCarshare as $car){
            if($car->capacity > $listCarshareWithNb[$indice]){
                array_push($listFinalCarshare,$car);
            }
            $indice = $indice+1;
        }


        return view('event',[
            'event' => $event,
            'participate' => $already,
            'listCarshare' => $listFinalCarshare
        ]);

    }

    public function add_participate($id){
        $participation_event = Participation_event::create([
            'event_id' => $id,
            'user_id' => Auth::id(),
        ]);
        $participation_event->save();
        
        return redirect()->action(
            [EventController::class,'showEvent'] , ['id' => $id]
        );
    }

    public function cancel_participate($id){
        $result = Participation_event::where('event_id','=',$id)->where('user_id','=',Auth::id())->first()->delete();
        return redirect()->action(
            [EventController::class,'showEvent'] , ['id' => $id]
        );
    }

    public function showDashboard(){
        

        $dateAdd = Carbon::now()->addDays(14);

        $eventAll = Event::where('date','<',$dateAdd)->where('date','>',Carbon::now())->orderBy('date','ASC')->get();

        $eventToday = Event::where('date','like','%'.Carbon::now()->format('Y-m-d').'%')->orderBy('date','ASC')->get();

        $eventPublic = Event::where('event_type_id','=','2')->where('date','>',Carbon::now())->orderBy('date','ASC')->get();

        $eventWeekEnd = Event::where('event_type_id','=',2)
        ->whereBetween('date',[Carbon::now()->addWeek()->startOfWeek(Carbon::SATURDAY)->format('Y-m-d H:i:s'),Carbon::now()->endOfWeek(Carbon::MONDAY)->format('Y-m-d H:i:s')])
        ->orderBy('date','ASC')
        ->get();

        $eventGastronomie = Event::where('event_type_id','=',2)->where('category_event_id','=',1)->where('date','>',Carbon::now())->orderBy('date','ASC')->get();

        $eventMusique = Event::where('event_type_id','=',2)->where('category_event_id','=',2)->where('date','>',Carbon::now())->orderBy('date','ASC')->get();

        return view('dashboard',[
            'eventAll' => $eventAll,
            'eventToday' => $eventToday,
            'eventPublic' => $eventPublic,
            'eventWeekEnd' => $eventWeekEnd,
            'eventGastronomie' => $eventGastronomie,
            'eventMusique' => $eventMusique
        ]);


    }


}
