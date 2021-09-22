<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorDetail extends Model
{
    //non bbiamo FK
    public function post(){
        return $this->hasOne(Post::class);
    }
}
