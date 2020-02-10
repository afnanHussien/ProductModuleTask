<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ColorTableSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        \DB::table('colors')->insert(array (
            0 => 
            array (
                'value' => 'black',
                'created_at' => Carbon::now()
            ),
            1 => 
            array (
                'value' => 'blue',
                'created_at' => Carbon::now()
            ),
            2 => 
            array (
                'value' => 'green',
                'created_at' => Carbon::now()
            ),
            3 => 
            array (
                'value' => 'yellow',
                'created_at' => Carbon::now()
            ),
            4 => 
            array (
                'value' => 'red',
                'created_at' => Carbon::now()
            ),
        ));
    }
}
