<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    public function homeOwner()
    {
        return $this->belongsTo(HomeOwner::class, 'id_owner');
    }
}
