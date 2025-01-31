<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolio';
    protected $fillable = ['name', 'image', 'short_description', 'description'];
}
