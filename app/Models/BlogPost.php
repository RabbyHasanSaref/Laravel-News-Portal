<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $fillable = ['Post_Title', 'Post_Content', 'Category_Id', 'Status', 'Post_Image'];

    public function category(){
        return $this->belongsTo(Category::class, 'Category_Id', 'id');
    }
}
