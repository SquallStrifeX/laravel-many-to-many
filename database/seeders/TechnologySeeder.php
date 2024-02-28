<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $techs = [
            [
                'name' => 'HTML',
                'color' => 'my_badge_blue',
            ],
            [
                'name' => 'SCSS',
                'color' => 'my_badge_pink',
            ],
            [
                'name' => 'CSS',
                'color' => 'my_badge_red',
            ],
            [
                'name' => 'JavaScript',
                'color' => 'my_badge_yellow',
            ],
            [
                'name' => 'PHP',
                'color' => 'my_badge_purple',
            ],
            [
                'name' => 'VueJs',
                'color' => 'my_badge_green',
            ],
            [
                'name' => 'Laravel',
                'color' => 'my_badge_orange',
            ],
        ];

        foreach ($techs as $tech) {
            $new_tech = new Technology();
            $new_tech->name = $tech['name'];
            $new_tech->badge_class = $tech['color'];
            $new_tech->slug = Str::slug($new_tech->name, '-');
            $new_tech->save();
        }
    }
}
