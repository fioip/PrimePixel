<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lens extends Model
{
    use HasFactory;

    protected $table = 'lenses';

    protected $fillable = [
        'model',
        'price',
        'description',
        'photo',
        'type',
    ];

    public $timestamps = true;

}
