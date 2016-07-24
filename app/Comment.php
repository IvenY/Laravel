<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Http\Requests;


class Comment extends Model
{
    protected $fillable = ['nickname', 'email', 'website', 'content', 'article_id'];
}
