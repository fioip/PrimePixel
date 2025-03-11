<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    use HasFactory;

    protected $table = 'cameras';

    protected $fillable = [
        'model',
        'price',
        'description',
        'photo',
        'type',
    ];

    public $timestamps = true;

}
