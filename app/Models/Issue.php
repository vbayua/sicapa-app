<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    public function capa()
    {
        return $this->belongsTo(Capa::class, 'capa_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function corrective()
    {
        return $this->hasMany(CorrectiveAction::class, 'ca_id');
    }

    public function preventive()
    {
        return $this->hasMany(PreventiveAction::class, 'pa_id');
    }
}
