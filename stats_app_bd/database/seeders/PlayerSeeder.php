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

        $result = $this->getdata("http://localhost:8000/players.json");
        $data = json_decode($result, true);

        DB::table('players')->delete();
        foreach ($data as $key) {
            DB::table('players')->insert(
                array(
                    'name' => $key['name'],
                    "age" => $key['age'],
                    "matches" => $key['matches'],
                    "debut" => $key['debut'],
                    "team_id" => $key['team_id'],
                    "position_id" => $key['position_id']
                )

            ); 
        }
    }
    function fakeip()
    {
        return long2ip(mt_rand(0, 65537) * mt_rand(0, 65535));
    }
    function getdata($url, $args = false)
    {
        global $session;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("REMOTE_ADDR: " . $this->fakeip(), "X-Client-IP: " . $this->fakeip(), "Client-IP: " . $this->fakeip(), "HTTP_X_FORWARDED_FOR: " . $this->fakeip(), "X-Forwarded-For: " . $this->fakeip()));
        if ($args) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($ch, CURLOPT_PROXY, "127.0.0.1:8888"); 
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
