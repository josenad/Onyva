<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participatiion_event extends Model
{
    use HasFactory;

    
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'event_id',
        'user_id',
        'state_id'
    ];
}
