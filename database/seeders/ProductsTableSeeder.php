<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テーブルのクリア
        // DB::table('products')->truncate();

        $products = [
            [
                'name' => '猪のバラ肉',
                'price' => 1500,
                'stock' => 20,
                'detail' => '猪の肉の部位でも脂が乗っていて、非常にジューシーな部分です。'
            ],
            [
                'name' => '鹿のユッケ',
                'price' => 3000,
                'stock' => 20,
                'detail' => '鹿の肉を新鮮なまま急速冷凍したものです。臭みがなく、食べやすいとご好評をいただいている商品です。'
            ],
            [
                'name' => '猪のロース',
                'price' => 1500,
                'stock' => 15,
                'detail' => '脂身が少なく、さっぱりした料理にむていている商品です。'
            ],
            [
                'name' => '鹿のロース',
                'price' => 1500,
                'stock' => 15,
                'detail' => '生姜焼きなどに合う部分です。脂身少ないので、女性に大人気の商品です。'
            ],
            [
                'name' => '猪のハラミ',
                'price' => 3000,
                'stock' => 20,
                'detail' => '非常にジューシーな部位です。焼肉などで食べると、白米がとまりません。'
            ],
            [
                'name' => '鹿のリブロース',
                'price' => 3000,
                'stock' => 20,
                'detail' => '赤身とサシのバランスが最高です。すき焼き、しゃぶしゃぶ、焼肉などで食べてみて下さい。'
            ],
        ];

        foreach($products as $product){
            \App\Models\Product::create($product);
        }
    }
}
