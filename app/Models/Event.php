<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $table = "event";

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'date',
        'image',
        'description',
        'coordinates_event_id',
        'event_type_id',
        'category_event_id',
        'user_id'
    ];

    public function coordinates()
    {
        return $this->hasOne('App\Models\Coordinates', 'id','coordinates_event_id');
    }

    public function type_event()
    {
        return $this->hasOne('App\Models\Type_event', 'id', 'event_type_id');
    }

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function category()
    {
        return $this->hasOne('App\Models\Category_event', 'id', 'category_event_id');
    }
}
