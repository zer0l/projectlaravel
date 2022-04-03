<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function avtoMs()
    {
       return $this->hasMany(avtoM::class);
    }

    public function brand()
    {
       return $this->hasOne(car::class)->select('addbrand');
    }
}
