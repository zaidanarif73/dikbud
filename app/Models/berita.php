<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;
use App\Traits\TrixRender;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Berita extends Model implements Viewable
{
    use HasFactory, HasTrixRichText, TrixRender, Loggable, InteractsWithViews;
    
    
    protected $fillable = [
        'title',
        'slug',
        'image',
        'date',
        'berita-trixFields',
        'creator',
    ];
}
