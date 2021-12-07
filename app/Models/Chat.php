<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_chat';

    protected $fillable = [
        'id_chat',
        'name_chat',
        'date_chat',
        'id_leader_chat'
    ];
}
