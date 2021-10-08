<?php

namespace App\Http\Controllers;

use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    public function createVariant($optionName,$optionValue){
        $variantsValues=json_decode($optionValue,true);
        $created=[];
        foreach($variantsValues as $variant){
            $variant=Variant::create(['option_name'=>$optionName,'option_value'=>$variant['value']]);
            $created[$variant->option_value]=$variant->id;
        }
        return $created;
        
    }
}
