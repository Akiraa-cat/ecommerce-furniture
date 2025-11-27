<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id','name','slug','description','material','color',
        'dimensions','weight','price','stock','images','sku',
        'is_featured','is_active'
    ];

    protected $casts = [
        'images' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
