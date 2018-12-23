<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Categories;
use App\Post;

class Pesan extends Model
{
     protected $fillable = ['name', 'number', 'tanggal', 'note'];

      public function photographer(){
        return $this->belongsTo(Post::class);
    }
}
