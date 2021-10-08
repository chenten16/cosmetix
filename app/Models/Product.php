<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','description','slug','price','sale_price','stock','preview_image','gallery'];
    use HasFactory;
    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }

    public function variants(){
        return $this->belongsToMany('App\Models\Variant')->withPivot('price')->withTimestamps();;
    }
}
