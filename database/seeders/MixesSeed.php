<?php

namespace Database\Seeders;

use App\Model\Mixes;
use Illuminate\Database\Seeder;

class MixesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $mixes = new Mixes;

        $str = '';
        for($c = 0; $c < 100; $c++)
        {
            for($i = 0; $i < 10; $i++)
            {
                $n = $i + $c;
                if ($n < 101) $str .= $n . ',';
            }
            $str =  trim($str, ',');

            $mixes->items = $str;
            $mixes->save();
        }
    }

}
