<?php

namespace Database\Seeders;

use App\Models\ProductVariants;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Image;
use App\Models\ProductVariant;
use App\Models\ProductImage;

  
class ProductSeeder extends Seeder
{
    public function run(): void
    {
$products = [
    [
        "id" => 1,
        "title" => "Rokok camel",
        "image" => [
            "/assets/products/rokok/rokok1.png",
            "/assets/products/rokok/rokok2.jpg",
            "/assets/products/rokok/rokok3.jpg",
            "/assets/products/rokok/rokok4.jpg"
        ],
        "rating" => 4,
        "location" => "Bangkalan",
        "price" => 15000,
        "discount" => 30,
        "description" => "ROKOK CAMEL ACTIVE PURPLE MINT ISI 20 BATANG 1 BUNGKUS ISI 20 BATANG HARGA DIATAS HARGA PER 1 BUNGKUS",
        "soldTotal" => 100,
        "stock" => 999,
        "variants" => [
            ["variant" => "Black", "price" => 15000],
            ["variant" => "White", "price" => 15000],
            ["variant" => "Mild Option Purple 12", "price" => 15000],
            ["variant" => "Mild Option Yellow 12", "price" => 15000],
            ["variant" => "Mild Intense Blue", "price" => 15000],
        ]
    ],
    [
        "id" => 2,
        "title" => "Beras super",
        "image" => [
            "/assets/products/beras/beras1.png",
            "/assets/products/beras/beras2.png",
            "/assets/products/beras/beras3.png",
            "/assets/products/beras/beras4.png"
        ],
        "rating" => 5,
        "location" => "Sumenep",
        "price" => 12000,
        "discount" => 10,
        "description" => "Rojolele Super Quality adalah beras premium berkualitas tinggi yang diproses dengan teknologi modern. Beras ini memiliki bentuk cenderung bulat dengan sedikit bagian berwarna putih susu dan beraroma khas seperti pandan wangi. Beras rojolele ini sangat cocok untuk usaha warung makan.",
        "soldTotal" => 100,
        "stock" => 999,
        "variants" => [
            ["variant" => "1kg", "price" => 12000],
            ["variant" => "5kg", "price" => 60000],
            ["variant" => "10kg", "price" => 120000],
        ]
    ],
    [
        "id" => 3,
        "title" => "Gula pasir",
        "image" => [
            "/assets/products/gula/gula1.png",
            "/assets/products/gula/gula2.png",
            "/assets/products/gula/gula3.png",
            "/assets/products/gula/gula4.png"
        ],
        "rating" => 5,
        "location" => "Sumenep",
        "price" => 17000,
        "discount" => 40,
        "description" => "produk gula tebu yang diproses dengan standar mutu yang tinggi sehingga menghasilkan gula yang murni, manis, bersih, dan alami.Gulaku Tebu memiliki aroma karameldan memiliki rasa leih manis dibanding gula pasir putih.",
        "soldTotal" => 100,
        "stock" => 999,
        "variants" => [
            ["variant" => "1kg", "price" => 17000],
        ]
    ],
    [
        "id" => 4,
        "title" => "Minyak goreng",
        "image" => [
            "/assets/products/minyak/minyak1.png",
            "/assets/products/minyak/minyak2.jpg",
            "/assets/products/minyak/minyak3.jpg",
            "/assets/products/minyak/minyak4.jpg"
        ],
        "rating" => 5,
        "location" => "Sampang",
        "price" => 22000,
        "discount" => 40,
        "description" => "Minyak goreng Bimoli dibuat dari bibit biji kelapa sawit pilihan yaitu \"Tenera\" untuk menghasilkan minyak goreng dengan kualitas terbaik. Diperkaya dengan Vitamin E, Pro Vitamin A Omega-6 dan Omega-9 yang dapat membantu menurunkan kolesterol jahat LDL dan menaikkan kolesterol baik HDL.",
        "soldTotal" => 100,
        "stock" => 999,
        "variants" => [
            ["variant" => "1L", "price" => 22000],
            ["variant" => "2L", "price" => 42000],
            ["variant" => "5L", "price" => 100000],
        ]
    ],
    [
        "id" => 5,
        "title" => "Tepung Segitiga",
        "image" => [
            "/assets/products/terigu/tepung1.png",
            "/assets/products/terigu/tepung2.jpg",
            "/assets/products/terigu/tepung3.jpg",
            "/assets/products/terigu/tepung4.jpg"
        ],
        "rating" => 5,
        "location" => "Bangkalan",
        "price" => 12000,
        "discount" => 10,
        "description" => "Segitiga Biru adalah tepung terigu yang cocok untukmembuat aneka makanan seperti bolu, brownies, cake, pisang, martabak manis, muffin, kue bulan, croissant, puff pastry, denish, bapia, pastel, kroket, risoles, dan lain-lain. Komposisi : Tepung terigu, Vitamin B1, Vitamin B2, Asam folat, zat besi dan seng.",
        "soldTotal" => 100,
        "stock" => 999,
        "variants" => [
            ["variant" => "1kg", "price" => 12000],
            ["variant" => "25kg", "price" => 216000],
        ]
    ],
    [
      "id" => 6,
      "title" => "Telur ayam",
      "image" => [
        "/assets/products/telur/telur1.jpg",
        "/assets/products/telur/telur2.jpg",
        "/assets/products/telur/telur3.jpg",
        "/assets/products/telur/telur4.jpg"
      ],
      "rating" => 5,
      "location" => "Pamekasan",
      "price" => 12500,
      "discount" => 40,
      "description" => "Telur ayam adalah telur yang dihasilkan oleh ternak unggas ayam. Terdapat dua macam telur ayam yang banyak dikonsumsi oleh masyarakat yaitu telur ayam kampung (telur ayam buras) dan telur ayam negeri (telur ayam ras). Telur ayam kampung merupakan telur ayam yang berasal dari unggas ayam kampung.",
      "soldTotal" => 100,
      "stock" => 999,
      "variants" => [
        ["variant" => "0.5kg", "price" => 12500],
        ["variant" => "1kg", "price" => 26000]
      ]
    ],
    [
      "id" => 7,
      "title" => "Pasta gigi",
      "image" => [
        "/assets/products/pasta-gigi/pasta1.png",
        "/assets/products/pasta-gigi/pasta2.jpg",
        "/assets/products/pasta-gigi/pasta3.jpg",
        "/assets/products/pasta-gigi/pasta4.jpg"
      ],
      "rating" => 5,
      "location" => "Pamekasan",
      "price" => 8000,
      "discount" => 10,
      "description" => "Kodomo pasta gigi untuk anak-anak dengan rasa jeruk yang mengandung fluoride dan xylitol untuk membantu mencegah gigi berlubang dengan remineralisasi gigi dan sekaligus menjaga kesehatan gigi anak.",
      "soldTotal" => 100,
      "stock" => 999,
      "variants" => [
         [
              "variant" => "Blue",
              "price" => 8000
         ],
          [
              "variant"=> "Yellow",
              "price" => 8000
          ],
          [
              "variant" => "Red",
              "price" => 8000
          ],
          [
              "variant" => "Green",
              "price" => 8000
          ]
      ]
    ],
    [
      "id" => 8,
      "title" => "Sabun lifebouy",
      "image" => [
        "/assets/products/sabun/sabun1.png",
        "/assets/products/sabun/sabun2.png",
        "/assets/products/sabun/sabun3.png",
        "/assets/products/sabun/sabun4.jpg"
      ],
      "rating" => 5,
      "location" => "Bangkalan",
      "price" => 3000,
      "discount" => 15,
      "description" => "Sabun cair antibakteri dengan aroma lemon segar yang mempu membersihkan kulit dan merevitalisasinya. Diperkaya dengan ActivSilver Formula untuk perlindungan terhadap 10 kuman penyebab masalah kesehatan yang berevolusi semakin kuat. Kini hadir dalam kemasan pouch 900ml yang paling hemat.",
      "soldTotal" => 100,
      "stock" => 999,
      "variants" => [
          [
              "variant" => "Green",
              "price" => 3000
          ],
          [
              "variant" => "Red",
              "price" => 3000
          ],
          [
              "variant" => "Yellow",
              "price" => 3000
          ],
          [
              "variant" => "Blue",
              "price" => 3000
          ]
      ]
    ],
    [
      "id" => 9,
      "title" => "Okky jelly drink",
      "image" => [
        "/assets/products/okky-jelly/okky1.png",
        "/assets/products/okky-jelly/okky2.png",
        "/assets/products/okky-jelly/okky3.png",
        "/assets/products/okky-jelly/okky4.png"
      ],
      "rating" => 5,
      "location" => "Sampang",
      "price" => 1000,
      "discount" => 10,
      "description" => "OKKY Jelly Drink adalah minuman jelly siap minum pertama dalam kemasan cup/gelas di Indonesia yang dirilis pada tahun 2003. Dengan rasa buah yang menyegarkan, ditambah Nata De Coco yang dapat dikunyah untuk sensasi yang menyenangkan.",
      "soldTotal" => 100,
      "stock" => 999,
      "variants" => [
        ["variant" => "1 gelas", "price" => 2000],
        ["variant" => "2 dus", "price" => 23000]
      ]
    ],
    [
      "id" => 10,
      "title" => "Teh pucuk",
      "image" => [
     "/assets/products/teh-pucuk/teh1.png",
        "/assets/products/teh-pucuk/teh2.jpeg",
        "/assets/products/teh-pucuk/teh3.jpg",
        "/assets/products/teh-pucuk/teh4.jpg"
      ],
      "rating" => 5,
      "location" => "Sumenep",
      "price" => 3500,
      "discount" => 30,
      "description" => "Teh Pucuk Harum diproduksi oleh PT Mayora Indah Tbk pada tahun 2011. Minuman ini dibuat dari pucuk daun teh pilihan, bagian terbaik untuk membuat minuman teh. Produk teh ini dipadukan dengan aroma jasmine untuk menciptakan rasa teh yang terbaik. Produk minuman ini dikemas praktis, sehingga mudah dibawa kemana saja.",
      "soldTotal" => 100,
      "stock" => 999,
      "variants" => [
        ["variant" => "1 botol", "price" => 3500],
        ["variant" => "1 dus", "price" => 60000]
      ]
    ],
    [
      "id" => 11,
      "title" => "Obat nyamuk baygon",
      "image" => [
        "/assets/products/obat-nyamuk/baygon1.png",
        "/assets/products/obat-nyamuk/baygon2.png",
        "/assets/products/obat-nyamuk/baygon3.jpg",
        "/assets/products/obat-nyamuk/baygon4.jpg"
      ],
      "rating" => 2,
      "location" => "Bangkalan",
      "price" => 5000,
      "discount" => 50,
      "description" => "Baygon adalah merek pestisida produksi S. C. Johnson & Son. Kegunaannya adalah sebagai pembasmi dan pengendali handalan rumah tangga, seperti nyamuk, kecoa, lipan, dan semut. Merek ini sangat populer di Indonesia sehingga sudah menjadi nama generik bagi produk sejenis.",
      "soldTotal" => 100,
      "stock" => 999,
      "variants" => [
          [
              "variant" => "450ml",
              "price" => 5000
          ],
          [
              "variant" => "600ml",
              "price" => 6500
          ],
          [
              "variant" => "1kg",
              "price" => 10000
          ]
      ]
    ],
    [
      "id" => 12,
      "title" => "Pakan burung juara",
      "image" => [
       "/assets/products/pakan-burung/pakan1.png",
        "/assets/products/pakan-burung/pakan1.png",
        "/assets/products/pakan-burung/pakan1.png",
        "/assets/products/pakan-burung/pakan1.png"
      ],
      "rating" => 5,
      "location" => "Sumenep",
      "price" => 8000,
      "discount" => 60,
      "description" => "pakan burung, pleci, glatik , prenjak, pelet/ voer mini, bahan baku segar bermutu protek in tinggi, multi vitamin dan mineral sehingga membuat burung tetap setabil, tidak mudah stres,",
      "soldTotal" => 100,
      "stock" => 999,
      "variants" => [
          [
              "variant" => "250g",
              "price" => 8000
          ],
          [
              "variant" => "500g",
              "price" => 15000
          ],
          [
              "variant" => "1000g",
              "price" => 30000
          ]
      ]
    ],
   [
        "id" => 13,
        "title" => "Hilo susu sachet",
        "image" => [
            "/assets/products/hilo/hilo1.png",
            "/assets/products/hilo/hilo2.png",
            "/assets/products/hilo/hilo3.png",
            "/assets/products/hilo/hilo4.png"
        ],
        "rating" => 5,
        "location" => "Sampang",
        "price" => 2000,
        "discount" => 30,
        "createdAt" => "Sun Aug 18 2024 10:33:45 GMT+0700 (Indochina Time)",
        "description" => "Hilo (atau yang digayakan sebagai HiLo) adalah merek susu ...",
        "soldTotal" => 100,
        "stock" => 999,
        "variants" => [
           ["variant" => "Swiss Chocolate", "price" => 2000],
           ["variant" => "Avocado Chocolate", "price" => 2000],
           ["variant" => "Choco hazelnut", "price" => 2000],
           ["variant" => "Chocolate taro", "price" => 2000],
        ]
    ],
   [
        "id" => 14,
        "title" => "Wafer nabati",
        "image" => [
            "/assets/products/nabati/nabati1.png",
            "/assets/products/nabati/nabati2.png",
            "/assets/products/nabati/nabati3.png",
            "/assets/products/nabati/nabati4.png"
        ],
        "rating" => 5,
        "location" => "Pamekasan",
        "price" => 10000,
        "discount" => 80,
        "createdAt" => "Fri Aug 16 2024 11:03:45 GMT+0700 (Indochina Time)",
        "description" => "Wafer Nabati ini terdiri dari lapisan tipis dan renyah ...",
        "soldTotal" => 100,
        "stock" => 999,
        "variants" => [
           ["variant" => "Keju", "price" => 10000],
           ["variant" => "Chocolate", "price" => 10000],
           ["variant" => "Strawberry", "price" => 10000],
        ]
    ],
   [
        "id" => 15,
        "title" => "Shampoo sunsilk",
        "image" => [
            "/assets/products/shampoo/shampoo.jpg",
            "/assets/products/shampoo/shampoo2.png",
            "/assets/products/shampoo/shampoo3.png",
            "/assets/products/shampoo/shampoo4.png"
        ],
        "rating" => 5,
        "location" => "Sumenep",
        "price" => 3000,
        "discount" => 40,
        "createdAt" => "Thu Aug 15 2024 11:03:45 GMT+0700 (Indochina Time)",
        "description" => "Dibuat dengan perpaduan minyak wangi bunga, vitamin B3 ...",
        "soldTotal" => 100,
        "stock" => 999,
        "variants" => [
           ["variant" => "Black shine", "price" => 3000],
           ["variant" => "Argan oil", "price" => 3000],
           ["variant" => "Collagen gingseng", "price" => 3000],
        ]
    ],
   [
        "id" => 16,
        "title" => "Tisu nice",
        "image" => [
            "/assets/products/tisu/tisu1.png",
            "/assets/products/tisu/tisu2.jpg",
            "/assets/products/tisu/tisu3.jpg",
            "/assets/products/tisu/tisu4.jpg"
        ],
        "rating" => 5,
        "location" => "Bangkalan",
        "price" => 7000,
        "discount" => 40,
        "createdAt" => "Sun Aug 18 2025 11:03:45 GMT+0700 (Indochina Time)",
        "description" => "Nice Facial merupakan tissue berbahan serat alami ...",
        "soldTotal" => 100,
        "stock" => 999,
        "variants" => [
           ["variant" => "1 pack", "price" => 7000],
           ["variant" => "1 dus", "price" => 32000],
        ]
    ],

];


        foreach ($products as $data) {
            // Insert product
            $product = Product::create([
                'id'          => $data['id'],
                'title'       => $data['title'],
                'rating'      => $data['rating'],
                'location'    => $data['location'],
                'price'       => $data['price'],
                'discount'    => $data['discount'],
                'description' => $data['description'],
                'sold_total'  => $data['soldTotal'],
                'stock'       => $data['stock'],
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);

            // Insert variants
            foreach ($data['variants'] as $variant) {
                ProductVariants::create([
                    'product_id' => $product->id,
                    'variant'    => $variant['variant'],
                    'price'      => $variant['price'],
                ]);
            }

            $ids = [];
            foreach($data['image'] as $image) {
                $image = Image::create([
                    'image_path' => $image
                ]);
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_id' => $image->id,
                ]);
            }
        }
    }

}
