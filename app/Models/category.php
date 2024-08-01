<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'category';

    public function posts(){
        return $this->hasMany(posts::class, 'category_id', 'id');
    }
}
