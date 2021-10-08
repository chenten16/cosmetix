<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function uploadImage($image)
    {
        $name = time() . '_' . $image->getClientOriginalName();
        $filePath = $image->storeAs('imgs', $name, 'public');
        return 'imgs/' . $filePath;
        // $file->name = time() . '_' . $image->getClientOriginalName();
        // $file->file = '/storage/' . $filePath;
        // $file->save();
    }
    public function addProduct(Request $req)
    {

        $featured_image = $this->uploadImage($req->file('featured_image'));
        $gallery_images = [];
        foreach ($req['gallery_images'] as $image) {
            $uploaded_path = $this->uploadImage($image);
            array_push($gallery_images, $uploaded_path);
        }
        $gallery_images = implode(',', $gallery_images);
        $slug = str_replace(" ", "-", $req['name']);
        $variantController = new VariantController();
        $variants = [];
        foreach ($req['option_name'] as $key => $name) {
            $variantValues = $variantController->createVariant($name, $req['option_value'][$key]);
            $variants[$name] = $variantValues;
        }

        
        $product = Product::create(['name' => $req['name'], 'description' => $req['description'], 'slug' => $slug, 'price' => $req['price'], 'sale_price' => $req['price'], 'stock' => 100, 'preview_image' => $featured_image, 'gallery' => $gallery_images]);
        
        foreach ($req->all() as $key => $value) {
            if (str_starts_with($key, 'selected_')) {
                $newKey = str_replace('selected_', '', $key);

                foreach ($value as $index => $selected) {
                    $product->variants()->attach($variants[$newKey][$selected], ['price' => $req['variant_price'][$index]]);
                }
            }
        }
    }
}
