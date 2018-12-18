<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\categories;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'categori_id', 'slug'];

    public function categori(){
        return $this->belongsTo(Categories::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
