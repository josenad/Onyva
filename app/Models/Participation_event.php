<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation_event extends Model
{
    use HasFactory;

    protected $table = 'participation_event';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'event_id',
        'user_id',
        ];
}
