<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

class kontak extends Model
{
    use HasFactory, Loggable;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'image',
    ];
}
