<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'meeting_at',
        'brief',
        'product_id',
        'other_product'
    ];

    protected $casts = [
        'meeting_at' => 'date', //format method
    ];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
