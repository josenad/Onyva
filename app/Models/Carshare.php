<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carshare extends Model
{
    use HasFactory;

    protected $table = 'carshare';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'capacity',
        'phone',
        'date',
        'coordinate_id',
        'user_id',
        'event_id'
    ];

    public function user(){
        return $this->hasOne('App\Models\User','id','user_id');
    }

    public function coordinates(){
        return $this->hasOne('App\Models\Coordinates','id','coordinate_id');
    }

    public function event(){
        return $this->hasOne('App\Models\Event','id','event_id');
    }

}
