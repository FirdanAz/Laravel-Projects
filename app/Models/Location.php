<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Wisata;

class Location extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function owners(){
        return $this->hasMany(Owner::class);
    }

    public function wisata(){
        return $this->hasMany(Wisata::class);
    }
}
