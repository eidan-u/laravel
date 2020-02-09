<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class POST extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'content'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
      /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    protected $table = "posts";

}
