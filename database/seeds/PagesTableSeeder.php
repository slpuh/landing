<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'name'=>'home',
                'alias'=>'home',
                'text'=>'Nulla consequat massa quis enim. Donec pede justo,'
                . ' fringilla vel, aliquet nec, vulputate eget, arcu. In enim '
                . 'justo, rhoncus ut, imperdiet a, venenatis vitae, justo',
                'images'=>'main_device_img.png',
            ],
            [
                'name'=>'about us',
                'alias'=>'aboutus',
                'text'=>'Nulla consequat massa quis enim. Donec pede justo,'
                . ' fringilla vel, aliquet nec, vulputate eget, arcu. In enim '
                . 'justo, rhoncus ut, imperdiet a, venenatis vitae, justo',
                'images'=>'about-img.jpg',
            ],
          ]);
    }
}
