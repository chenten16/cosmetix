<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;
    protected $fillable=['option_name','option_value'];
    public function products(){
        return $this->belongsToMany('App\Models\Product')->withPivot('price')->withTimestamps();;
    }
}
