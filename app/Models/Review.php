<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [ 
        'name',
        'lastname',
        'url',
        'alt_name',
        'description',
        'publishdate',
        'created_at',
        'updated_at'
    ];
}
