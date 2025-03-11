<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'product_type',
        'quantity'
    ];

    public function camera()
    {
        return $this->belongsTo(Camera::class, 'product_id')
            ->where('product_type', 'camera');
    }

    public function lens()
    {
        return $this->belongsTo(Lens::class, 'product_id')
            ->where('product_type', 'lens');
    }

    public function light()
    {
        return $this->belongsTo(Light::class, 'product_id')
            ->where('product_type', 'light');
    }

    public function memoryCard()
    {
        return $this->belongsTo(MemoryCard::class, 'product_id')
            ->where('product_type', 'memoryCard');
    }
}