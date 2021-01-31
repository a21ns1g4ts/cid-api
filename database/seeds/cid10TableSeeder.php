<?php

use App\Cid10;
use Illuminate\Database\Seeder;

class cid10TableSeeder extends Seeder
{
    public function run()
    {
        $cids = (array) json_decode(file_get_contents(__DIR__ . '/cid10.json'));
        
        $inserts = [];

        foreach ($cids as $cid){
            array_push($inserts, (array) $cid);
        }

        Cid10::insert($inserts);
    }
}
