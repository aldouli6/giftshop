<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;

use App\Models\Product;

class CategoryAndProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat1 =  Category::create([
            'name' => 'Devices',
        ]);
        Product::create([
            'price' => 250,
            'categorie_id'=>$cat1->id,
            'description' => 'Good watch',
            'url_img' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=989&q=80'
        ]);
        Product::create([
            'price' => 150,
            'categorie_id'=>$cat1->id,
            'description' => 'Bad watch',
            'url_img' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=989&q=80'
        ]);
        $cat2 =  Category::create([
            'name' => 'Bags',
        ]);
        Product::create([
            'price' => 350,
            'categorie_id'=>$cat2->id,
            'description' => 'Good Bag',
            'url_img' => 'https://images.unsplash.com/photo-1491637639811-60e2756cc1c7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=669&q=80'
        ]);
        Product::create([
            'price' => 250,
            'categorie_id'=>$cat2->id,
            'description' => 'Bad Bag',
            'url_img' => 'https://images.unsplash.com/photo-1491637639811-60e2756cc1c7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=669&q=80'
        ]);

        $cat3 =  Category::create([
            'name' => 'Perfumes',
        ]);
        Product::create([
            'price' => 100,
            'categorie_id'=>$cat3->id,
            'description' => 'Good perfume',
            'url_img' => 'https://images.unsplash.com/photo-1528740561666-dc2479dc08ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1868&q=80'
        ]);

        Product::create([
            'price' => 50,
            'categorie_id'=>$cat3->id,
            'description' => 'Bad perfume',
            'url_img' => 'https://images.unsplash.com/photo-1528740561666-dc2479dc08ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1868&q=80'
        ]);
    }
}
