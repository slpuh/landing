<?php

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            [
                'name'=>'Finance App',
                'images'=>'portfolio_pic1.jpg',
                'filter'=>'GPS',                
             ],
            [
                'name'=>'Concept',
                'images'=>'portfolio_pic2.jpg',
                'filter'=>'design',                
             ],
            [
                'name'=>'Shopping',
                'images'=>'portfolio_pic3.jpg',
                'filter'=>'Android',                
             ],
            [
                'name'=>'Managment',
                'images'=>'portfolio_pic4.jpg',
                'filter'=>'design',                
             ],
            [
                'name'=>'Iphone',
                'images'=>'portfolio_pic5.jpg',
                'filter'=>'web',                
             ],
            [
                'name'=>'Nexus',
                'images'=>'portfolio_pic6.jpg',
                'filter'=>'web',                
             ],
            [
                'name'=>'Android',
                'images'=>'portfolio_pic7.jpg',
                'filter'=>'android',                
             ],
            [
                'name'=>'Android',
                'images'=>'portfolio_pic8.jpg',
                'filter'=>'android',                
             ],
           ]);
    }
}
