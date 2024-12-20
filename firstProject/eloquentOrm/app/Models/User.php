<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public $timestamps = false; //created_at, updated_at not come
    protected $guarded = [];  //for mass assignment
}
