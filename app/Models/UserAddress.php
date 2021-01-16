<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{

    protected  $fillable=['user_id','name_family','mobile',
        'tell','province','city','post_code','status'];
}
