<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('foods')->insert([
            [
            'name'=>'Chicken Biriyani',
            'price'=>'180',
            'description'=>"Bamboo chicken with leg peice",
            "category"=>"Nonveg",
            "gallery"=>"https://vismaifood.com/storage/app/uploads/public/e12/7b7/127/thumb__700_0_0_0_auto.jpg"
            ],
            [
                'name'=>'Chicken Kabab',
                'price'=>'120',
                'description'=>"5 pcs",
                "category"=>"Nonveg",
                "gallary"=>"https://thumbs.dreamstime.com/z/fried-chicken-wings-kabab-178675625.jpg"
            ],
            [
                'name'=>'South indian Meals',
                'price'=>'150',
                'description'=>"Boiled rice,papad,pickels,curd,2samabars",
                "category"=>"Veg",
                "gallery"=>"https://restaurantindia.s3.ap-south-1.amazonaws.com/s3fs-public/content6553.jpg"
            ],
            [
                'name'=>'Masala dose',
                'price'=>'60',
                'description'=>"with butter",
                "category"=>"veg",
                "gallery"=>"https://muthuhealthyrecipes.com/wp-content/uploads/2021/09/Mysore-Masala-Dosa-Recipe.jpg"
            ],
            [
                'name'=>'Burger',
                'price'=>'99',
                'description'=>"With extra cheese",
                "category"=>"Veg",
                "gallery"=>"https://content.jdmagicbox.com/comp/mandya/f6/9999p8232.8232.190621072738.c1f6/catalogue/the-best-food-shop-mandya-fast-food-0vfymr8tuf.jpg"
            ],
            [
                'name'=>'Chicken Biriyani',
                'price'=>'120',
                'description'=>"Bamboo chicken with leg peice",
                "category"=>"Nonveg",
                "gallery"=>"https://vismaifood.com/storage/app/uploads/public/e12/7b7/127/thumb__700_0_0_0_auto.jpg"
                ],
                [
                    'name'=>'Chicken Kabab',
                    'price'=>'150',
                    'description'=>"5 pcs",
                    "category"=>"Nonveg",
                    "gallary"=>"https://thumbs.dreamstime.com/z/fried-chicken-wings-kabab-178675625.jpg"
                ],
                [
                    'name'=>'South indian Meals',
                    'price'=>'110',
                    'description'=>"Boiled rice,papad,pickels,curd,2samabars",
                    "category"=>"Veg",
                    "gallery"=>"https://restaurantindia.s3.ap-south-1.amazonaws.com/s3fs-public/content6553.jpg"
                ],
                [
                    'name'=>'Masala dose',
                    'price'=>'80',
                    'description'=>"with butter",
                    "category"=>"veg",
                    "gallery"=>"https://muthuhealthyrecipes.com/wp-content/uploads/2021/09/Mysore-Masala-Dosa-Recipe.jpg"
                ],
                [
                    'name'=>'Burger',
                    'price'=>'199',
                    'description'=>"With extra cheese",
                    "category"=>"Veg",
                    "gallery"=>"https://content.jdmagicbox.com/comp/mandya/f6/9999p8232.8232.190621072738.c1f6/catalogue/the-best-food-shop-mandya-fast-food-0vfymr8tuf.jpg"
                ],
        ]);
    }
}