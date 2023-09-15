<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    
    ];
    
    public function itemes(){
        return $this->hasMany(Iteme::class);
    }

    protected $hidden = [
        'created_at',
        'updated_at',
      
    ];
}
