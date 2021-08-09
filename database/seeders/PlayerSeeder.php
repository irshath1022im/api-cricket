<?php

namespace Database\Seeders;

use App\Models\Players;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $players = [
            [
                'name' => 'irshath' ,
                 'dob' => 'test',
                 'country' => 'test',
                 'batting_style' => 'test',
                 'remark' => 'test',
                 'team_id' => 1,
            ],
            [
                'name' => 'mohamed' ,
                 'dob' => 'test',
                 'country' => 'test',
                 'batting_style' => 'test',
                 'remark' => 'test',
                 'team_id' => 1,
            ],
            [
                'name' => 'sinthu' ,
                 'dob' => 'test',
                 'country' => 'test',
                 'batting_style' => 'test',
                 'remark' => 'test',
                 'team_id' => 1,
            ],
            [
                'name' => 'nana' ,
                 'dob' => 'test',
                 'country' => 'test',
                 'batting_style' => 'test',
                 'remark' => 'test',
                 'team_id' => 1,
            ],
            [
                'name' => 'sakki' ,
                 'dob' => 'test',
                 'country' => 'test',
                 'batting_style' => 'test',
                 'remark' => 'test',
                 'team_id' => 1,
            ],
            [
                'name' => 'siraj' ,
                 'dob' => 'test',
                 'country' => 'test',
                 'batting_style' => 'test',
                 'remark' => 'test',
                 'team_id' => 1,
            ],
            [
                'name' => 'airoos' ,
                 'dob' => 'test',
                 'country' => 'test',
                 'batting_style' => 'test',
                 'remark' => 'test',
                 'team_id' => 1,
            ],
            [
                'name' => 'aslam' ,
                 'dob' => 'test',
                 'country' => 'test',
                 'batting_style' => 'test',
                 'remark' => 'test',
                 'team_id' => 1,
            ],
            [
                'name' => 'hussain' ,
                 'dob' => 'test',
                 'country' => 'test',
                 'batting_style' => 'test',
                 'remark' => 'test',
                 'team_id' => 1,
            ],
            [
                'name' => 'karthik' ,
                 'dob' => 'test',
                 'country' => 'test',
                 'batting_style' => 'test',
                 'remark' => 'test',
                 'team_id' => 1,
            ],
            [
                'name' => 'siyan' ,
                 'dob' => 'test',
                 'country' => 'test',
                 'batting_style' => 'test',
                 'remark' => 'test',
                 'team_id' => 1,
            ],
            [
                'name' => 'nowfar' ,
                 'dob' => 'test',
                 'country' => 'test',
                 'batting_style' => 'test',
                 'remark' => 'test',
                 'team_id' => 1,
            ],[
                'name' => 'atharith' ,
                 'dob' => 'test',
                 'country' => 'test',
                 'batting_style' => 'test',
                 'remark' => 'test',
                 'team_id' => 1,
            ],

        ];

        foreach ( $players as $player) {
            Players::create($player);
        }
    }
}
