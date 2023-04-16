<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videos = [
            [
                'title' => 'Batman: The Dark Knight Returns',
                'description' => 'This groundbreaking masterpiece has been one of the most important graphic novels of all time.',
                'thumb' => 'https://via.placeholder.com/150x150.png?text=Thumb+1',
                'price' => '19.99',
                'series' => 'Batman: The Dark Knight Returns',
                'sale_date' => '2021-03-10',
                'type' => 'graphic novel'
            ],
            [
                'title' => 'Watchmen',
                'description' => 'In an alternate world where the mere presence of American superheroes changed history, the US won the Vietnam War, Nixon is still president, and the cold war is in full effect.',
                'thumb' => 'https://via.placeholder.com/150x150.png?text=Thumb+2',
                'price' => '24.99',
                'series' => 'Watchmen',
                'sale_date' => '2021-05-12',
                'type' => 'graphic novel'
            ],
            [
                'title' => 'Watchmen',
                'description' => 'In an alternate world where the mere presence of American superheroes changed history, the US won the Vietnam War, Nixon is still president, and the cold war is in full effect.',
                'thumb' => 'https://via.placeholder.com/150x150.png?text=Thumb+2',
                'price' => '24.99',
                'series' => 'Watchmen',
                'sale_date' => '2021-05-12',
                'type' => 'graphic novel'
            ],
            [
                'title' => 'Watchmen',
                'description' => 'In an alternate world where the mere presence of American superheroes changed history, the US won the Vietnam War, Nixon is still president, and the cold war is in full effect.',
                'thumb' => 'https://via.placeholder.com/150x150.png?text=Thumb+2',
                'price' => '24.99',
                'series' => 'Watchmen',
                'sale_date' => '2021-05-12',
                'type' => 'graphic novel'
            ],
            [
                'title' => 'Watchmen',
                'description' => 'In an alternate world where the mere presence of American superheroes changed history, the US won the Vietnam War, Nixon is still president, and the cold war is in full effect.',
                'thumb' => 'https://via.placeholder.com/150x150.png?text=Thumb+2',
                'price' => '24.99',
                'series' => 'Watchmen',
                'sale_date' => '2021-05-12',
                'type' => 'graphic novel'
            ],
            [
                'title' => 'Watchmen',
                'description' => 'In an alternate world where the mere presence of American superheroes changed history, the US won the Vietnam War, Nixon is still president, and the cold war is in full effect.',
                'thumb' => 'https://via.placeholder.com/150x150.png?text=Thumb+2',
                'price' => '24.99',
                'series' => 'Watchmen',
                'sale_date' => '2021-05-12',
                'type' => 'graphic novel'
            ],
            [
                'title' => 'Watchmen',
                'description' => 'In an alternate world where the mere presence of American superheroes changed history, the US won the Vietnam War, Nixon is still president, and the cold war is in full effect.',
                'thumb' => 'https://via.placeholder.com/150x150.png?text=Thumb+2',
                'price' => '24.99',
                'series' => 'Watchmen',
                'sale_date' => '2021-05-12',
                'type' => 'graphic novel'
            ],
            [
                'title' => 'The Sandman Vol. 1: Preludes & Nocturnes',
                'description' => 'An occultist attempting to capture Death to bargain for eternal life traps her younger brother Dream instead.',
                'thumb' => 'https://via.placeholder.com/150x150.png?text=Thumb+3',
                'price' => '29.99',
                'series' => 'The Sandman',
                'sale_date' => '2021-07-01',
                'type' => 'graphic novel'
            ]
        ];
        
        foreach($videos as $video) {
            $v = new Video();
            $v->title = $video['title'];
            $v->description = $video['description'];
            $v->thumb = $video['thumb'];
            $v->price = $video['price'];
            $v->series = $video['series'];
            $v->sale_date = $video['sale_date'];
            $v->type = $video['type'];
            $v->save();
        }
    }
}
