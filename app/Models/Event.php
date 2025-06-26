<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=[
        'title',
        'description',
        'date_location',
        'image',
        'status',
        'price'
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
