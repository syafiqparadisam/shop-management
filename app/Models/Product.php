<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
 protected $table = 'products';

 public static function getPopularProduct() {
	    return self::select([
            'products.id',
            'products.title',
            \DB::raw('MIN(image.image_path) AS image_path')
        ])
        ->join('product_images', 'product_images.product_id', '=', 'products.id')
        ->join('image', 'product_images.image_id', '=', 'image.id')
        ->where('products.rating', '=', 5)
        ->groupBy('products.id', 'products.title')
         ->limit(6) 
        ->get();
 }

 public static function getPromoProduct() {
      return self::select([
            'products.id',
            'products.title',
            'products.price',
            \DB::raw('MIN(image.image_path) AS image_path')
        ])
        ->join('product_images', 'product_images.product_id', '=', 'products.id')
        ->join('image', 'product_images.image_id', '=', 'image.id')
        ->where('products.price', '<=', 5000)
        ->groupBy('products.id', 'products.title')
         ->limit(4) 
        ->get();
 }
 public static function getOtherProducts() {
       return self::select([
            'products.id',
            'products.title',
            'products.price',
            'products.stock',
            'products.rating',
            'products.location',
            \DB::raw('MIN(image.image_path) AS image_path')
        ])
        ->join('product_images', 'product_images.product_id', '=', 'products.id')
        ->join('image', 'product_images.image_id', '=', 'image.id')
        ->groupBy('products.id', 'products.title')
        ->get();
 }

 public static function detailsProduct($id) {
     return self::select([
            'products.id',
            'products.title',
            'products.price',
            'products.stock',
            'products.rating',
            'products.location',
            'image.image_path',
            'products.sold_total',
            'products.description',
            'products.stock',
            'products.discount',
      
        ])
        ->distinct()
        ->join('product_images', 'product_images.product_id', '=', 'products.id')
        ->join('image', 'product_images.image_id', '=', 'image.id')
        ->where('products.id' , '=', $id)
        ->get();
 }


 public static function detailVariantProduct($id) {
     return self::select([
           'product_variants.variant',
           'product_variants.price',
           'product_variants.id'
        ])
        ->join('product_variants', 'product_variants.product_id', '=', 'products.id')
        ->where('products.id' , '=', $id)
        ->get();
 }
}
