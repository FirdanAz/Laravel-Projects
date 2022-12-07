<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Wisata;

class Location extends Model
{
    use HasFactory;
    public function wisata(){
        return $this->hasMany(Wisata::class);
    }
}
