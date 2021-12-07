<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation_user extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_conversation_user';

    protected $fillable = [
        'id_conversation_user',
        'id_chat',
        'id_user'
    ];

}
