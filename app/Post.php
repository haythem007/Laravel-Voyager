<?php

namespace App;
use App\category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function category(){
        return $this->belongsTo(Category::Class);
    }
}
