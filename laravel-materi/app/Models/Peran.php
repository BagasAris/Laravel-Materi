<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'perans';
    protected $fillable = [
        'id',
        'nama',
        'film_id',
        'cast_id',
    ];

    public function film()
    {
        return $this->hasMany('App\Models\Film', 'id', 'film_id');
    }

    public function cast()
    {
        return $this->hasMany('App\Models\Cast', 'id', 'cast_id');
    }

}
