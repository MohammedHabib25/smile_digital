<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prod extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    
    ];
    
    public function additors(){
        return $this->hasMany(Additor::class);
    }

    protected $hidden = [
        'created_at',
        'updated_at',
      
    ];
}
