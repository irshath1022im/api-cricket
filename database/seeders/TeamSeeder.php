<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $teams = [
            ['name' => 'Lions CC', 'thumbnail' => 'teams/lionscc.jpeg'],
            ['name'=> 'Muaither CC', 'thumbnail' => 'teams/muaithersc.jpeg'],
            ['name' => 'Pottuvil CC','thumbnail' => 'teams/pottuvilsc.jpeg']
        ];

        foreach($teams as $team) {
            Team::create($team);
        }
    }
}
