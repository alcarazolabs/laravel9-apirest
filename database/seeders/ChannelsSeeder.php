<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Seeder;

class ChannelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name' => 'America TV',
            'logo_url' => 'https://gruposecuoya.es/wp-content/uploads/2020/07/americatv_p.jpg',
            'url' => 'www.america.com.pe',
            'state' => 1
        ]);

        Channel::create([
            'name' => 'Latina',
            'logo_url' => 'https://cdnmain-website.latina.pe/wp-content/uploads/2020/06/22011424/Mosca_Latina.jpg',
            'url' => 'www.latina.com.pe',
            'state' => 1
        ]);
        

        Channel::create([
            'name' => 'Panamericana TV',
            'logo_url' => 'https://www.foromedios.com/uploads/monthly_2020_11/large.Panamericana_TV_2020.png.77179a67fae28baa4e501fb1698068ed.png',
            'url' => 'www.panamericana.com.pe',        
            'state' => 1
        ]);
    }
}
