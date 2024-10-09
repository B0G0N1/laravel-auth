<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; // Importa Str per generare lo slug

class Project extends Model
{
    use HasFactory;

    // Definisce i campi che possono essere riempiti
    protected $fillable = [
        'title',
        'description',
        'url',
        'slug',
    ];

    // Genera uno slug a partire dal titolo
    public static function generateslug($title)
    {
        return Str::slug($title, '-');
    }
}
