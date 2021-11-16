<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Post extends Model
{
    protected $fillable = ['title','author','post_date','post_content','image_url'];

    

    public function getFormattedDate($column, $format = 'd-m-Y H:i:s'){
        return Carbon::create($this->$column)->format($format);
    }


}
