<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'content', 'language', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
