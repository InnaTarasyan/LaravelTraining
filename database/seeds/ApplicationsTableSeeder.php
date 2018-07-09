<?php

use Illuminate\Database\Seeder;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if( DB::table('applications')->count() == 0){
            DB::table('applications')->insert([
                [
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                ]
            ]);
        }
    }
}
