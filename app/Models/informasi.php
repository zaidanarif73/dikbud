<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

class Informasi extends Model
{
    use HasFactory, Loggable;
    protected $fillable = [
        'title',
        'file_path',
        'file_link',
        'type',
    ];
}
