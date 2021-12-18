<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Coordinates;
use App\Models\Category_event;
use App\Models\Participation_event;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProfileController extends BaseController
{
    use ValidatesRequests;

    public function index(){

        $info_profile = User::find(Auth::id());
        $list_category_event = Category_event::all();

        $list_participation_event_user= Participation_event::where('user_id','=',Auth::id())->select('event_id')->get();

        $dateAdd = Carbon::now()->addDays(14);
        $list_participation_event_upcoming = Event::whereIn('id', $list_participation_event_user)->where("date",'<',$dateAdd)->orderBy('date','ASC')->get();
        $list_event_user = Event::whereIn('id', $list_participation_event_user)->orderBy('date','ASC')->get();

        return view('profile', [
            'info_profile' => $info_profile,
            'list_category_event' => $list_category_event,
            'list_event_user' => $list_event_user,
            'list_participation_event_upcoming' => $list_participation_event_upcoming
        ]);


    }





}
