<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'description',
        'price',
        'discount',
        'image',
        'book_pdf',
        'quantity',
        'is_featured',
        'condition',
        'status'
    ];
}
