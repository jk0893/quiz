<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        "meat_id",
        "cereal_id",
        "herb_id",
        "vegetable_id",
    ];

    public function meat(){
        return $this->belongsTo(Meat::class);
    }

    public function cereal(){
        return $this->belongsTo(Cereal::class);
    }

    public function herb(){
        return $this->belongsTo(Herb::class);
    }

    public function vegetable(){
        return $this->belongsTo(Vegetable::class);
    }
}
