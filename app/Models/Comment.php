<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable = [
        'blog_post_id',
        'name',
        'email',
        'comment'
    ];

    public function postComment(){
        return $this->hasMany(BlogPost::class);
    }
}
