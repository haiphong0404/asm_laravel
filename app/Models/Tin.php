<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{
    use HasFactory;
    protected $table='tin';
    protected $fillable = [
        'title', 'content', 'image', 'views', 'category_id', 'created_at', 'updated_at'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
