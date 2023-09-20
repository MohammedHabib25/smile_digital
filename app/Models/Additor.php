<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','email', 'phone', 'description' , 'country' , 'prod_id' ,
    
    ];
    public function prod(){
        return $this->belongsTo(Prod::class );
    }
    protected $hidden = [
        'created_at',
        'updated_at',
        'product_id'
    ];
}
