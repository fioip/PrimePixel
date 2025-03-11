<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lights extends Model
{
    use HasFactory;

    protected $table = 'lights';

    protected $fillable = [
        'model',
        'price',
        'description',
        'photo',
        'type',
    ];

    public $timestamps = true;
}
