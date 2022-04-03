<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    public function car()
    {
       return $this->hasOne(Brand::class);
    }
    public function brand()
    {
       return $this->hasOne(car::class)->select('addbrand');
    }
}
