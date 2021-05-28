<?php

namespace Database\Seeders;

use App\Models\Players;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->delete();
        $json_data = File::get("database/data/data.json");
        $data = json_decode($json_data);
        /*  $result = trim($json_data, '"');
        var_dump(json_decode($result, true)); */
        /*      $player_data = json_encode($json_data["data"]);
        $result = json_decode($json_data["data"], true);*/
        /*  var_dump(json_last_error()); */


        foreach ($data as $key) {
            Players::create(
                array(
                    "name" => $key->name,
                    "age" => $key->age,
                    "matches" => $key->matches,
                    "debut" => $key->debut,
                    "team_id" => $key->team_id,
                    "position_id" => $key->position_id
                )

            );
        }
    }
}
