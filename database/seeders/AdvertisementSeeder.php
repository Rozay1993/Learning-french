<?php

namespace Database\Seeders;

use App\Models\Advertisement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Advertisement::create([
            'name' => 'test',
            'url' => 'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1744708010354579',
        ]);
    }
}
