<?php

if (! function_exists('shortTitle')) {
    function shortTitle($title) {
        $words = explode(" ", $title);
        return implode(" ", array_slice($words, 0, 2));
    }
}

if (!function_exists('discount')) {
function discount($price, $discountPercentage) {
  $discountAmount = $price * ($discountPercentage / 100);
  $discountedPrice = $price - $discountAmount;
  return $discountedPrice;
}
}