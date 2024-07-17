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
                'name' => 'fb',
                'value' => 'https://www.facebook.com/WorldWitchesIndonesiaCommunity/'
            ],
            [
                'name' => 'wa',
                'value' => 'https://chat.whatsapp.com/HZgmBfhnioiLjYVXejy5sk'
            ],
            [
                'name' => 'ig',
                'value' => 'https://www.instagram.com/w_witchid'
            ],
            [
                'name' => 'dc',
                'value' => 'https://discord.gg/tHACqJ378j'
            ],
            [
                'name' => 'msg',
                'value' => 'https://m.me/j/AbaIkMccvzuVosQM/'
            ],
            [
                'name' => 'web',
                'value' => 'http://192.168.100.47:5000/#'
            ],
            [
                'name' => 'footle1',
                'value' => 'World Witches Indonesia Community'
            ],
            [
                'name' => 'footle2',
                'value' => 'World Witches Serie'
            ],
            [
                'name' => 'footle3',
                'value' => 'SLAVUSworks'
            ],
            [
                'name' => 'footle4',
                'value' => 'Sources and Information Providers'
            ],
            [
                'name' => 'footdesc1',
                'value' => 'Langit dan Lautan yang Menguhubungkan Kita | Sampai Jumpa Dihamparan Langit yang Luas dan Lautan yang Biru'
            ],
            [
                'name' => 'footdesc2',
                'value' => '「ワールドウィッチーズシリーズ」 | ウィッチたちの応援よろしくお願いします！ | <a class="text-reset" href="http://w-witch.jp/" target="_blank">w-witch.jp</a>'
            ],
            [
                'name' => 'footdesc3',
                'value' => 'This website is provided and maintained by SLAVUSworks as part of World Witches Indonesia Community (WWIC) | <a class="text-reset" href="https://slavuwus.rf.gd/" target="_blank">slavuwus.rf.gd</a>'
            ],
            [
                'name' => 'footdesc4',
                'value' => '                    
                <p>
                <a href="https://twitter.com/w_witch_anime" class="text-reset">「ワールドウィッチーズシリーズ」公式 Twitter</a>
                </p>
                <p>
                <a href="https://worldwitches.fandom.com/" class="text-reset">World Witches Series Wiki</a>
                </p>
                <p>
                <a href="http://w-witch.jp/" class="text-reset">「ワールドウィッチーズ」公式サイト</a>
                </p>
                <p>
                <a href="https://www.wikipedia.org/" class="text-reset">Wikipedia</a>
                </p>'
            ],
            [
                'name' => 'license',
                'value' => '<p xmlns:cc="http://creativecommons.org/ns#" >This work is licensed under <a class="text-reset" href="http://creativecommons.org/licenses/by-sa/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;">CC BY-SA 4.0</p>'
            ],
            [
                'name' => 'copyright',
                'value' => '<a class="text-reset fw-bold" href="https://slavuwus.rf.gd/"> slavuwus.rf.gd</a>'
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
