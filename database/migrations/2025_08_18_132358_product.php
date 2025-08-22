<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Tabel utama produk
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('rating')->default(0);
            $table->string('location')->nullable();
            $table->integer('price');
            $table->integer('discount')->default(0);
            $table->text('description')->nullable();
            $table->integer('sold_total')->default(0);
            $table->integer('stock')->default(0);
            $table->timestamps();
        });

        // Tabel varian produk
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')
                  ->constrained('products')
                  ->onDelete('cascade');
            $table->string('variant');
            $table->integer('price');
            $table->timestamps();
        });

        // Tabel gambar produk
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')
                  ->constrained('products')
                  ->onDelete('cascade');
            $table->foreignId('image_id')
                  ->constrained('image')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('product_variants');
        Schema::dropIfExists('products');
    }
};
