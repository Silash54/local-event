<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Like extends Model
{
    public function Gallery(): BelongsTo
    {
        return $this->belongsTo(Gallery::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
