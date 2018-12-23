<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categories;
use App\User;


class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'content' ,'categori_id', 'slug'];

    public function categori(){
        return $this->belongsTo(Categories::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
