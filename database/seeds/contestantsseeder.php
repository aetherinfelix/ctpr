<?php

use Illuminate\Database\Seeder;

class contestantsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contestants')->insert([
            'name' => 'Carlton',
            'rank' => 13
        ]);
        DB::table('contestants')->insert([
            'name' => 'Charlotte',
            'rank' => 1
        ]);
        DB::table('contestants')->insert([
            'name' => 'Atehna the Therapig',
            'rank' => 3
        ]);
        DB::table('contestants')->insert([
            'name' => 'Harriet',
            'rank' => 15
        ]);
        DB::table('contestants')->insert([
            'name' => 'Annie Rose',
            'rank' => 4
        ]);
        DB::table('contestants')->insert([
            'name' => 'Kilo',
            'rank' => 10
        ]);
        DB::table('contestants')->insert([
            'name' => 'Amala',
            'rank' => 5
        ]);
        DB::table('contestants')->insert([
            'name' => 'Beto',
            'rank' => 9
        ]);
        
    
        DB::table('contestants')->insert([
            'name' => 'Blink',
            'rank' => 11
        ]);
        DB::table('contestants')->insert([
            'name' => 'Chancho',
            'rank' => 12
        ]);
        DB::table('contestants')->insert([
            'name' => 'Moo Shu',
            'rank' => 2
        ]);
        DB::table('contestants')->insert([
            'name' => 'Athea Lorraine',
            'rank' => 6
        ]);
        DB::table('contestants')->insert([
            'name' => 'Hammy',
            'rank' => 14
        ]);
        DB::table('contestants')->insert([
            'name' => 'Dahlia',
            'rank' => 7
        ]);
        DB::table('contestants')->insert([
            'name' => 'Gumbo',
            'rank' => 8
        ]);
    }
}
