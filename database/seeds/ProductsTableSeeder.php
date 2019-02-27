<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        for($i = 1 ; $i < 15; $i++){
            Product::create([
                'name' => 'Bi-Directional Inverters' . $i,
                'slug' => 'Bi-Directional-Inverters-'.$i,
                'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
                'price' => 20700,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac quam nec nunc volutpat molestie. 
                Mauris non faucibus libero. Donec malesuada tellus lorem, id lobortis mauris vestibulum et.',
                'image' => 'products\February2019\Bi-Directional-Inverters-' . $i .  '.png',
            ])->categories()->attach(1);
        }

        $product = Product::find(1);
        $product->categories()->attach(2);

        for($i = 1 ; $i < 15; $i++){
            Product::create([ 
                'name' => 'MPPT Charge Controllers '. $i,
                'slug' => 'MPPT-charge-controllers-'.$i,
                'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
                'price' => 5870,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac quam nec nunc volutpat molestie. 
                Mauris non faucibus libero. Donec malesuada tellus lorem, id lobortis mauris vestibulum et.',
                'image' => 'products\February2019\MPPT-charge-controllers-' . $i .  '.png',
            ])->categories()->attach(2);
        }


        for($i = 1 ; $i < 15; $i++){
            Product::create([
                'name' => 'Grid Tied Solutions ' . $i,
                'slug' => 'Grid-tied-solutions-'.$i,
                'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
                'price' => 20700,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac quam nec nunc volutpat molestie. 
                Mauris non faucibus libero. Donec malesuada tellus lorem, id lobortis mauris vestibulum et.',
                'image' => 'products\February2019\Grid-tied-solutions-' . $i .  '.png',
            ])->categories()->attach(3);
        }

        for($i = 1 ; $i < 15; $i++){
            Product::create([
                'name' => 'Solar Pump ' . $i,
                'slug' => 'Solar-Pump-'.$i,
                'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
                'price' => 8900,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac quam nec nunc volutpat molestie. 
                Mauris non faucibus libero. Donec malesuada tellus lorem, id lobortis mauris vestibulum et.',
                'image' => 'products\February2019\Solar-Pump-' . $i .  '.png',
            ])->categories()->attach(4);
        }
 
    }
}
