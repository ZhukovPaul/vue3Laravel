<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected  $with = ["themes"];
   // protected $hidden = ['created_at','updated_at'];
    
    public function themes(){
        return $this->belongsTo(PostTheme::class,"post_theme_id","id");
    }
}
