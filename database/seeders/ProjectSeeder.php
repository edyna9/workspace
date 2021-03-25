<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'name' => 'Wall decor',
                'author' => 'Happy Crafs',
                'genre' => 'Crafts',
                'source' => "https://www.youtube.com/embed/ScIUtfZC3sc",
                'description' => 'DIY Room Decor! Quick and Easy Home Decorating Ideas #2 GREATEST HOME DECORATING UNIQUE IDEAS | UNIQUE CRAFTS IDEAS | UNIQUE DIY IDEAS',
            ],
            [
                'name' => 'Table Lamb | Cement Pot Light | Night Lamb Ideas | Cement Hand Light ',
                'author' => 'Dots DIY',
                'genre' => 'Crafts',
                'source' => "https://www.youtube.com/embed/S3wdHPuJxNs",
                'description' => 'DIY concrete planters,Amazing Table Lamb,Cement Pot Light,how to make a concrete vase,DIY cement table top,how to make cement pot,Cement Hand,Ballon craft ideas,Table lamb ideas,room decor',
            ],
            [
                'name' => 'Do it yourself garden ideas',
                'author' => 'Buzz Feed Nifty',
                'genre' => 'Renovations',
                'source' => "https://www.youtube.com/embed/7TJ2WpRHyNg",
                'description' => 'Rejoice because gardening season is finally here! Make your garden more bountiful this year with Miracle-Gro® Performance Organics',
            ],
        ]);
    }
}
