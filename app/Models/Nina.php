<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nina extends Model
{
    protected $fillable = ['name', 'skill', 'bio'];
    
    /** @use HasFactory<\Database\Factories\NinaFactory> */
    use HasFactory;
}
