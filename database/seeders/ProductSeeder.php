<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=> 'OPPO Mobile',
                'price'=> "15000",
                'description' => "smartphone with 6gb ram and much more features",
                'category' => "mobile",
                'gallery'=> 'https://images.unsplash.com/photo-1567581935884-3349723552ca?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80'
            ],
            [
                'name'=> 'Android TV',
                'price'=> "20000",
                'description' => "smart tv with HD screen",
                'category' => "Electronic",
                'gallery'=> 'https://5.imimg.com/data5/SELLER/Default/2023/4/297529466/NZ/YL/TI/68681028/55-4k-ultra-hd-android-tv.jpg'
            ],
            [
                'name'=> 'ONIDA TV',
                'price'=> "8000",
                'description' => "Onida tv and much more features",
                'category' => "TV",
                'gallery'=> 'https://www.sony.co.in/image/ccbe548efa94995a9c034d96a4a6acbb?fmt=pjpeg&bgcolor=FFFFFF&bgc=FFFFFF&wid=2515&hei=1320'
            ],
            [
                'name'=> 'Android Watch',
                'price'=> "2000",
                'description' => "Smart watch with multiple functions",
                'category' => "watch",
                'gallery'=> 'https://5.imimg.com/data5/NW/BJ/MY-12985213/dz09-smart-watch-500x500.jpg'
            ]
        ]);
    }
}
