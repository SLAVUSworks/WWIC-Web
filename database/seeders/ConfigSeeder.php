<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Config::insert([
            [
                'name' => 'logo',
                'value' => 'wwic-logo.png'
            ],            
            [
                'name' => 'bg',
                'value' => 'wwic-bg.png'
            ],         
            [
                'name' => 'blogname',
                'value' => 'w-witchid'
            ],            
            [
                'name' => 'title',
                'value' => 'World Witches Indonesia Community'
            ],
            [
                'name' => 'caption',
                'value' => 'Oleh langit dan lautan, kita dihubungkan!'
            ],
            [
                'name' => 'ads_widget',
                'value' => 'adsense 1'
            ],            
            [
                'name' => 'ads_header',
                'value' => 'adsense 1'
            ],            
            [
                'name' => 'ads_footer',
                'value' => 'adsense 1'
            ],            
            ]);
    }
}
