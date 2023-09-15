<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iteme extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','email', 'phone', 'description' , 'country' , 'product_id' ,
    
    ];
    public function product(){
        return $this->belongsTo(Product::class );
    }
    protected $hidden = [
        'created_at',
        'updated_at',
        'product_id'
    ];
}
