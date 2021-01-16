<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected  $fillable=['user_id','avatar','avatar_flag',
        'news_receive','national_code','sex','bill','bill_card','birthday','status'];
    protected  $hidden=['bill','bill_card'];
}
