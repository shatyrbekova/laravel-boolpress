<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
protected $fillable =[

    'title',
    'content',
    'author',
    'cover'
];
//belongs to dove abbiamo FK
public function authorDetail(){
    return $this->belongsTo((AuthorDetail::class));
}
}
