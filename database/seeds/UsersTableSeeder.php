<?php

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if( DB::table('users')->count() == 0){
            DB::table('users')->insert([
                [
                    'name' => 'Inna Tarasyan',
                    'email' => 'innatarasyanmail@gmail.com',
                    'password' => '$2y$10$csEevEFIrXz/Z.wWEthQ2.72dLQLT29DPykDfFgkeEJpsX5Oa9p8W',
                    'remember_token' => '8N6ikNE1o806YKGvRf6ILDqykxgrMV2h40SSg1YUnvuypIwK85RaFpKoTQKS',
                    'created_at' => '2018-06-17 21:00:00',
                    'updated_at' => '2018-06-17 21:00:00',
                    'login' => 'Inna'
                ],
                [
                    'name' => 'Alex Tarasyan',
                    'email' => 'atarasyan@gmail.com',
                    'password' => '$2y$10$eL7EBf1C.w2HlEzcghGMYO/q2.Jb02RPBzS7QcCSbmE6T5bBdafKy',
                    'remember_token' => '8N6ikNE1o806YKGvRf6ILDqykxgrMV2h40SSg1YUnvuypIwK85RaFpKoTQKS',
                    'created_at' => '2018-06-17 21:00:00',
                    'updated_at' => '2018-06-17 21:00:00',
                    'login' => 'Alex'
                ],
                [
                    'name' => 'Irina Sagatelyan',
                    'email' => 'atarasyan@gmail.com',
                    'password' => '$2y$10$J1K5AYeTVVyLGiLjBC2bE.FtI4K/4AtFI2EruZfiUGsAAoo6KnhMq',
                    'remember_token' => '8N6ikNE1o806YKGvRf6ILDqykxgrMV2h40SSg1YUnvuypIwK85RaFpKoTQKS',
                    'created_at' => '2018-06-17 21:00:00',
                    'updated_at' => '2018-06-17 21:00:00',
                    'login' => 'Irina'
                ]
                ]);
        }
    }
}
