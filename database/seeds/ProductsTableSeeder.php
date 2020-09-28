<?php

use App\Product;
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
        // Fruits
        for ($i=1; $i <= 3; $i++) {
            Product::create([
                'name' => 'Apple '.$i,
                'slug' => 'apple-'.$i,
                'details' => 'Red Apple',
                'price' => rand(3, 5),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' =>  'products/dummy/apple-'.$i.'.jpg',
                'images' => '["products\/dummy\/apple-2.jpg","products\/dummy\/apple-3.jpg","products\/dummy\/apple-4.jpg"]',
            ])->categories()->attach(1);
        }

      

        // Vegetables
        for ($i = 1; $i <= 3; $i++) {
            Product::create([
                'name' => 'Banana ' . $i,
                'slug' => 'banana-' . $i,
                'details' => 'Original banana',
                'price' => rand(2,4),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/dummy/banana-'.$i.'.jpg',
                'images' => '["products\/dummy\/banana-2.jpg","products\/dummy\/banana-3.jpg","products\/dummy\/banana-4.jpg"]',
            ])->categories()->attach(2);
        }

        

        

        // Select random entries to be featured
        Product::whereIn('id', [1, 2, 5, 8, 9])->update(['featured' => true]);
    }
}
