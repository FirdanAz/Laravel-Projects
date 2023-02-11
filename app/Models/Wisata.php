<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Location;

class Wisata extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function locations(){
        return $this->hasMany(Location::class);
    }

    public function scopeFilter($query, array $filters){
        
        $query->when($filters['search']??false, function($query, $search){
            return $query->where('name', 'like', '%' . $search . '%')
            ->orWhere('price', 'like', '%' . $search . '%')
            ->orWhere('address', 'like', '%' . $search . '%');
        });

        $query->when($filters['location']??false, function($query, $category){
            return $query->whereHas('location', function($query) use ($category){
                $query->where('id', $category);
            });
        });
    }

    
}
