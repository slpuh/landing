<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'name'=>'Android',
                'text'=>'Nulla consequat massa quis enim. Donec pede justo, '
                . 'fringilla vel, aliquet nec, vulputate eget, arcu. In enim '
                . 'justo, rhoncus ut, imperdiet a, venenatis vitae, justo',
                'icon'=>'fa-android',                
             ],
            [
                'name'=>'Apple',
                'text'=>'Nulla consequat massa quis enim. Donec pede justo, '
                . 'fringilla vel, aliquet nec, vulputate eget, arcu. In enim '
                . 'justo, rhoncus ut, imperdiet a, venenatis vitae, justo',
                'icon'=>'fa-apple',                
             ],
            [
                'name'=>'Design',
                'text'=>'Nulla consequat massa quis enim. Donec pede justo, '
                . 'fringilla vel, aliquet nec, vulputate eget, arcu. In enim '
                . 'justo, rhoncus ut, imperdiet a, venenatis vitae, justo',
                'icon'=>'fa-dropbox',                 
             ],
            [
                'name'=>'Concept',
                'text'=>'Nulla consequat massa quis enim. Donec pede justo, '
                . 'fringilla vel, aliquet nec, vulputate eget, arcu. In enim '
                . 'justo, rhoncus ut, imperdiet a, venenatis vitae, justo',
                'icon'=>'fa-html5',                
             ],
            [
                'name'=>'Research',
                'text'=>'Nulla consequat massa quis enim. Donec pede justo, '
                . 'fringilla vel, aliquet nec, vulputate eget, arcu. In enim '
                . 'justo, rhoncus ut, imperdiet a, venenatis vitae, justo',
                'icon'=>'fa-slack',             
             ],
            [
                'name'=>'Experience',
                'text'=>'Nulla consequat massa quis enim. Donec pede justo, '
                . 'fringilla vel, aliquet nec, vulputate eget, arcu. In enim '
                . 'justo, rhoncus ut, imperdiet a, venenatis vitae, justo',
                'icon'=>'fa-users',                 
             ],            
           ]);
    }
}
