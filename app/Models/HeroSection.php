<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class HeroSection extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'heading',
        'banner',
        'subheading',
        'achievement',
        'path_video',
    ];
}
