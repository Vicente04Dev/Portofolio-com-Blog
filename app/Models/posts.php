<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['title', 'short_description', 'description', 'slug', 'image', 'category_id', 'user_id', 'situation_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
