<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_event extends Model
{
    use HasFactory;

    protected $table = 'type_event';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
    ];
}
