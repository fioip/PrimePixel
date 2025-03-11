<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemoryCard extends Model
{
    use HasFactory;

    protected $table = 'memory_cards';

    protected $fillable = [
        'model',
        'price',
        'description',
        'photo',
        'type',
        'specifications',
    ];

    public $timestamps = true;

}
