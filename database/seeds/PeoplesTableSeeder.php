<?php

use Illuminate\Database\Seeder;

class PeoplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peoples')->insert([
            [
            'name' => 'Tom Jonson',
            'position' => 'CEO',
            'images' => 'team_pic1.jpg',
             'text' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing'
                . ' elit. Aenean commodo ligula eget dolor. Aenean massa. Cum '
                . 'sociis natoque penatibus et magnis dis parturient montes, '
                . 'nascetur ridiculus mus. Donec quam felis, ultricies nec, '
                . 'pellentesque eu, pretium quis, sem.'   
             ],
            [
            'name' => 'Ivan Ivanov',
            'position' => 'Director',
            'images' => 'team_pic2.jpg',
             'text' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing'
                . ' elit. Aenean commodo ligula eget dolor. Aenean massa. Cum '
                . 'sociis natoque penatibus et magnis dis parturient montes, '
                . 'nascetur ridiculus mus. Donec quam felis, ultricies nec, '
                . 'pellentesque eu, pretium quis, sem.'   
             ],
            [
            'name' => 'John Tomson',
            'position' => 'Meneger',
            'images' => 'team_pic3.jpg',
             'text' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing'
                . ' elit. Aenean commodo ligula eget dolor. Aenean massa. Cum '
                . 'sociis natoque penatibus et magnis dis parturient montes, '
                . 'nascetur ridiculus mus. Donec quam felis, ultricies nec, '
                . 'pellentesque eu, pretium quis, sem.'   
             ],
        ]);
    }
}
