<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['id','title', 'description', 'user_id', 'tag'];

    // Define the relationship with the user who authored the blog post
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
 