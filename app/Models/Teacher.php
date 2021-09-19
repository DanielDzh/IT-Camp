<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [ 
        'name',
        'lastname',
        'profession',
        'url',
        'alt_name',
        'description',
        'created_at',
        'updated_at'
    ];

    
}
