<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function scopefilter($query, array $filters)
    {
        if(isset($filters['search']) ? $filters['search'] : false){
            $query->where(fn($query) => 
                $query->where('tittle', 'like', '%' . request('search') . '%')
                ->orWhere('author', 'like', '%' . request('search') . '%')
                ->orWhere('abstract', 'like', '%' . request('search') . '%')
            );
        }

        if(isset($filters['publisher']) ? $filters['publisher'] : false){
            $query->whereHas('publisher', fn($query) => 
                // $query->where('publisher_id', 'like', '%' . request('publisher') . '%')
                $query->where('publisher_id', 'like', '%' . request('publisher') . '%')
            );
        }
    }

    public function publisher()
    {
        return $this->belongsTo(publisher::class);
    }
}
