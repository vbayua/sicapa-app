<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capa extends Model
{
    use HasFactory;

    public function issues()
    {
        return $this->hasMany(Issue::class);
    }
}
