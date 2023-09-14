<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'casts';
    protected $fillable = [
        'id',
        'nama',
        'umur',
    ];
}
