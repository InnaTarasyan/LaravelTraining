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
            // отсюда меняем
            DB::table('applications')->insert(array(
                array(
                    'name' => 'C Language Quiz',
                    'desc' => 'Wishing to enhance skills on C Programming? Wishing to test your knowledge to determine level of C Programming proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in C Programming.',
                    'img' => 'C_Language_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-C-Language-Quiz/dp/B0190PZPU0/ref=sr_1_33?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-33',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            // отсюда меняем
            DB::table('applications')->insert(array(
                array(
                    'name' => 'C# MCQ.',
                    'desc' => 'Wishing to enhance skills on C# Programming? Wishing to test your knowledge to determine level of C# Programming proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in C# Programming.',
                    'img' => 'CSharp.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-C-MCQ/dp/B018ZSK544/ref=sr_1_24?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-24',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'C++ Quiz',
                    'desc' => 'Wishing to enhance skills on C++ Programming? Wishing to test your knowledge to determine level of C++ Programming proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in C++ Programming.',
                    'img' => 'C_++_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-C-Quiz/dp/B0191Z306A/ref=sr_1_31?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-31',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Cloud Computing Quiz',
                    'desc' => 'Wishing to enhance skills on Cloud Computing Subject? Wishing to test your knowledge to determine level of Cloud Computing? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in Cloud Computing Subject.',
                    'img' => 'Cloud_Computing_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Cloud-Computing-Quiz/dp/B0190UQ496/ref=sr_1_23?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-23',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Computer Networks Quiz.',
                    'desc' => 'Wishing to enhance skills on Computer Networks? Wishing to test your Computer Networks knowledge? Preparing for interviews ? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students.',
                    'img' => 'Computer_Networks_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Computer-Networks-Quiz/dp/B0191QLFUW/ref=sr_1_19?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-19',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Computer Organization and Architecture Quiz.',
                    'desc' => 'Wishing to enhance skills on Computer Organization and Architecture? Wishing to test your Computer Organization knowledge? Preparing for interviews ? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students.',
                    'img' => 'Computer_Organization_and_Architecture-Quiz.jpg',
                    'url' => 'https://www.amazon.com/Computer-Organization-and-Architecture-Quiz/dp/B0191J2P3K/ref=sr_1_32?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-32',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Data Science Quiz.',
                    'desc' => 'Wishing to enhance skills on Data Science subject? Wishing to test your knowledge to determine level of Data Science subject proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in Data Science subject.',
                    'img' => 'Data_Science_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Data-Science-Quiz/dp/B0193W0HUS/ref=sr_1_29?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-29',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Database Management Quiz.',
                    'desc' => 'Wishing to enhance skills on Database Management System programming? Wishing to test your knowledge to determine level of Database Management System proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in Database Management System.',
                    'img' => 'Database_Management_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Database-Management-Quiz/dp/B01934CLTQ/ref=sr_1_36?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-36',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Digital Communication Test',
                    'desc' => 'Wishing to enhance skills on Digital Communication? Wishing to test your knowledge to determine level of Digital Communication proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Digital-Communication-Test/dp/B01BI8M7NU/ref=sr_1_17?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-17',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'English Grammar Quiz.',
                    'desc' => 'Improving your English speaking skills will help you communicate more easily and effectively. You\'ll make it easier for people to understand what you\'re saying, and your speech will flow more naturally. This quizz will help you test yourself and remember the new phrases. The test will include multiple choice questions. Each attempt you can answer 10 questions in random. After you finish the questions, you will see the review page and score sheet. If you have any questions or suggestions please let me know.',
                    'img' => 'English_Grammar_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-English-Grammar-Quiz/dp/B019264QX4/ref=sr_1_7?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-7',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'GRE Exam Preparation.',
                    'desc' => 'This application helps to prepare for GRE Exam(Verbal Section) and is useful for TOEFL Exam preparation. It has three different levels of difficulty:easy, intermediate and advanced.',
                    'img' => 'GRE_Exam_Preparation.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-GRE-Exam-Preparation/dp/B019CM3GVQ/ref=sr_1_14?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-14',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Guess the Day of the Week.',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Guess_the_Day_of_the_Week.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Guess-Day-Week/dp/B0196LLENU/ref=sr_1_15?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-15',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Guess the Flag.',
                    'desc' => 'This is geography quiz game where you will guess flags of given countries. The rules are simple. Click on the country name who\'s flag you see. At certain levels you get some bonuses.',
                    'img' => 'Guess_the_Flag.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Guess-the-Flag/dp/B019E4WNBG/ref=sr_1_18?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-18',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Guess The World Capitals.',
                    'desc' => 'Can you tell which capital belongs to which country? Do you know your world capitals? Geography quiz game will help you to familiarize yourself with world countries, looking at their pictures.',
                    'img' => 'Guess_The_World_Capitals.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Guess-World-Capitals/dp/B0190JT9XA/ref=sr_1_11?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-11',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Java Quiz.',
                    'desc' => 'Wishing to enhance skills on Java programming language? Wishing to test your Java knowledge? Preparing for interviews ? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test covers most of topics in Java. Enjoy :).',
                    'img' => 'Java_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Java-Quiz/dp/B019CS6MH0/ref=sr_1_20?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-20',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'JavaScript Programming MCQ.',
                    'desc' => 'Wishing to enhance skills on JavaScript Programming? Wishing to test your knowledge to determine level of JavaScript Programming proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in JavaScript Programming.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-JavaScript-Programming-MCQ/dp/B019AEMV7G/ref=sr_1_4?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-4',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Linux MCQ.',
                    'desc' => 'WWishing to enhance skills on Linux? Wishing to test your knowledge to determine level of Linux proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in Linux .',
                    'img' => 'Linux_MCQ.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Linux-MCQ/dp/B01991W6VG/ref=sr_1_25?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-25',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Artificial Intelligence Quiz. ',
                    'desc' => 'Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.',
                    'img' => 'Artificial_Intelligence_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL
                )
            ));

        }
    }
}
