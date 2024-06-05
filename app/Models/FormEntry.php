<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormEntry extends Model
{
    use HasFactory;
    protected $table = 'form_entries';

    protected $fillable = ['name', 'email', 'date', 'time', 'message'];
    public function lawyer()
    {
        return $this->belongsTo(User::class, 'lawyer_id');
    }   
}
