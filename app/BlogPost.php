<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    //protected $table = "blogposts";
    protected $fillable=['title','content'];
}
//look into when table name doesn't match the model name
//softdelete
//slug