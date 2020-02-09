<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the comments for the blog post.
     */
    public function Post()
    {
        return $this->hasMany('App\Comment');
    }
    protected $table = "Comments";
}
