<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
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

            'Product_Name'=>'Yes You Can Notebook',
            'Brand'=>'CREATIVE MIDDLE',
            'Price'=>'250',
            'Category'=>'Stationary',
            'Description'=>'When you deserve to have beautiful things that make working hard fun, and our "Yes You Can" notebook does just that. Its semi-hard cover makes it easy to carry around wherever you go.',
            'Size/Color_Option'=>'',
            'Material'=>'',
            'Note'=>'128 Blank Pages',
            
            
        ]);

        DB::table('products')->insert([

            'Product_Name'=>'Marigold Green Tea',
            'Brand'=>'TEA TRUNK',
            'Price'=>'399',
            'Category'=>'Tea',
            'Description'=>"Our tribute to the iconic Marigold,a symbol of celebration and festive joy. Hands down Tea Trunk's best selling green tea and most popular as gifts,wedding favours and souvenirs of India. Petals of yellow and orange marigold flower,lemongrass bits,green tea.Health Benefits: Perfect to improve digestion and compliment your detox regime. Marigold belongs to the Calendula family. It has natural healing properties.",
            'Size/Color_Option'=>'',
            'Material'=>'Rose Gold Tins',
            'Note'=>'Size - 50g',
            
        ]);

        DB::table('products')->insert([

            'Product_Name'=>'Cinnamon Tea',
            'Brand'=>'TEA FLOOR',
            'Price'=>'300',
            'Category'=>'Tea',
            'Description'=>'When you deserve to have beautiful things that make working hard fun, and our "Yes You Can" notebook does just that. Its semi-hard cover makes it easy to carry around wherever you go.',
            'Size/Color_Option'=>'',
            'Material'=>'Glass Jars',
            'Note'=>'Size - 100g',
            
        ]);

        DB::table('products')->insert([

            'Product_Name'=>'Autumn Sunset with Tassels',
            'Brand'=>'ENACTUS KIRORI MAL COLLEGE',
            'Price'=>'350',
            'Category'=>'Fashion Accessory',
            'Description'=>'When you deserve to have beautiful things that make working hard fun, and our "Yes You Can" notebook does just that. Its semi-hard cover makes it easy to carry around wherever you go.',
            'Size/Color_Option'=>'',
            'Material'=>'Cotton, Tie and Die',
            'Note'=>'Please note that each product would differ due to the tie and die craft. Hand Wash Only.',
            
        ]);

        DB::table('products')->insert([

            'Product_Name'=>'Graphic Grey Tumbler',
            'Brand'=>'EAT TRAVEL SPLURGE',
            'Price'=>'600',
            'Category'=>'Quirky, Travel',
            'Description'=>'When you deserve to have beautiful things that make working hard fun, and our "Yes You Can" notebook does just that. Its semi-hard cover makes it easy to carry around wherever you go.',
            'Size/Color_Option'=>'',
            'Material'=>' ',
            'Note'=>'Capacity - 300m',
            
        ]);
    }
}
