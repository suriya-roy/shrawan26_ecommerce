<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class product extends Model
{

    public function shop(): BelongsTo
    {
        return $this->belongsTo(shop::class);
    }
}
