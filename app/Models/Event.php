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


    /**
     * Get the coordinate associated with the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function coordinates(): HasOne
    {
        return $this->hasOne('App\Coordinates', 'id','coordinates_event_id');
    }

    /**
     * Get the event associated with the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type_event(): HasOne
    {
        return $this->hasOne('App\Type_event', 'id', 'event_type_id');
    }

    /**
     * Get the user associated with the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    /**
     * Get the category associated with the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category(): HasOne
    {
        return $this->hasOne('App\Category_event', 'id', 'category_event_id');
    }
}
