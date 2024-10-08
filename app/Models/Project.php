<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; // Importa Str per la funzione slug

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'url',
        'slug',
    ];

    // Funzione per generare lo slug
    public static function generateslug($title)
    {
        return Str::slug($title, '-');
    }
}
