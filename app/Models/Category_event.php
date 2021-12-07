<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category_event extends Model
{

    protected $table = "category_event";

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name'
    ];


}
