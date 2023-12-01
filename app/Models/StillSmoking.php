<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class StillSmoking extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function users():BelongsToMany
    {
        return $this->belongsToMany(User::class,'still_smoking_users');
    }
}
