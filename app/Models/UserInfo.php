<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected  $fillable = ['phone','country','address'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
