<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
           [
            'name' => 'mobile',
            'price' => '2000',
            'category' => 'Electronics',
            'description' => 'LG TV come with sleek style and design that make them the center of attraction of the room they are present in. With innovative features and patent technologies',
            'gallery' => 'https://static.hub.91mobiles.com/wp-content/uploads/2019/12/vivo-v17-review-image-13.jpg',
           ],
           [
            'name' => 'mobile',
            'price' => '25000',
            'category' => 'Electronics',
            'description' => 'LG TV come with sleek style and design that make them the center of attraction of the room they are present in. With innovative features and patent technologies',
            'gallery' => 'https://st1.bgr.in/wp-content/uploads/2019/10/vivo-nex-3-lead.jpg',
           ],
           [
            'name' => 'bed',
            'price' => '20000',
            'category' => 'furiture',
            'description' => 'LG TV come with sleek style and design that make them the center of attraction of the room they are present in. With innovative features and patent technologies',
            'gallery' => 'https://ii1.pepperfry.com/media/catalog/product/w/e/568x625/wendy-king-size-bed-with-storage-in-light-walnut-finish-by-trendsbee-wendy-king-size-bed-with-storag-pgysdm.jpg',
           ],
           [
            'name' => 'chair',
            'price' => '1000',
            'category' => 'furiture',
            'description' => 'LG TV come with sleek style and design that make them the center of attraction of the room they are present in. With innovative features and patent technologies',
            'gallery' => 'https://www.ekbotefurniture.com/wp-content/uploads/2019/01/CLASSIC-WOODEN-DINING-CHAIR-2.jpg',
           ],
           [
            'name' => 'doongle',
            'price' => '600',
            'category' => 'Electronics',
            'description' => 'LG TV come with sleek style and design that make them the center of attraction of the room they are present in. With innovative features and patent technologies',
            'gallery' => 'https://assets.mspimages.in/wp-content/uploads/2021/04/jiofi.jpg',
           ],

        ]);
        //
    }
}
