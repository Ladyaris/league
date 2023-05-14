<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';
    protected $guarded = ['id'];

    protected $fillable = [
        'name', 'description', 'genre', 'image'
    ];
}
