<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /* libera os campos para salvar em massa */
    protected $fillable = [
        'title',
        'content',
    ];
}
