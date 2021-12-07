<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation_carshare extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'state',
        'carshare_id',
        'user_id',
    ];
}
