<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_message';

    protected $fillable = [
        'id_message',
        'date_message',
        'id_chat'
    ];
}
