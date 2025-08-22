<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Number;

class HomeController extends Controller
{
    public function store(Request $request) {

        // get popular product
        $popularProduct = Product::getPopularProduct();
        $promoProduct = Product::getPromoProduct();
        $otherProduct = Product::getOtherProducts();
        // dd(json_encode($popularProduct));
        return view('welcome',['popular' => $popularProduct, 'promo' => $promoProduct, 'other' => $otherProduct]);
    }

    public function details($id) {

        $product = Product::detailsProduct($id);
        $variants = Product::detailVariantProduct($id);
        return view('product.product-details', ['details' => $product, 'variants' => $variants]);
    }
}
