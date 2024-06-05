<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawappointt extends Model
{
    use HasFactory;
    protected $table = 'lawappointts';
    protected $fillable = ['name', 'email', 'law' , 'des']; // List of columns you can insert into
}
