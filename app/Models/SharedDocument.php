<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SharedDocument extends Model
{
    use HasFactory;

    protected $fillable = [
       'title',
        
        'language',
     'document_path',
      
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
