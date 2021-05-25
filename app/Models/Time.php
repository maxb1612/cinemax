<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Time extends Model
{
    use HasFactory;

    public function session(): HasOne
    {
        return $this->hasOne(Session::class);
    }
}
