<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;
use App\Traits\TrixRender;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

class Berita extends Model
{
    use HasFactory, HasTrixRichText, TrixRender, Loggable;
    
    
    protected $fillable = [
        'title',
        'slug',
        'image',
        'date',
        'berita-trixFields',
        'creator',
    ];
}
