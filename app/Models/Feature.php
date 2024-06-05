<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'paragraph',
        'heading2',
        'paragraph2',
        'heading3',
        'paragraph3',
        'image',
    ];
}
