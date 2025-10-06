<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProjectClient;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testimonial extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'message',
        'thumbnail',
        'project_client_id',
    ];

    public function Client()
    {
        return $this->belongsTo(ProjectClient::class, 'project_client_id');
    }
}
