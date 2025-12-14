<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class company extends Model
{
   
   public function social_media(): HasMany
   {
       return $this->hasMany(socialMedia::class);
   }
}
