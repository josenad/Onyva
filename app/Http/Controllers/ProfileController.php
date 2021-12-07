<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Coordinates;
use App\Models\Category_event;

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
        $list_event_user = Event::where('user_id','=',Auth::id());
        $list_event_user_upcoming = Event::orderBy('date','ASC')->limit('10');
        
        return view('profile', [
            'info_profile' => $info_profile,
            'list_category_event' => $list_category_event,
            'list_event_user' => $list_event_user,
            'list_event_user_upcoming' => $list_event_user_upcoming
        ]);


    }





}
