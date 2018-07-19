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
                    'updated_at' => NULL,
                    'type' => 'apps'
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
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            // отсюда меняем
            DB::table('applications')->insert(array(
                array(
                    'name' => 'C_#_MCQ',
                    'desc' => 'Wishing to enhance skills on C# Programming? Wishing to test your knowledge to determine level of C# Programming proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in C# Programming.',
                    'img' => 'C_Sharp_MCQ.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-C-MCQ/dp/B018ZSK544/ref=sr_1_24?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-24',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
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
                    'updated_at' => NULL,
                    'type' => 'apps'
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
                    'updated_at' => NULL,
                    'type' => 'apps'
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
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Computer Organization and Architecture Quiz.',
                    'desc' => 'Wishing to enhance skills on Computer Organization and Architecture? Wishing to test your Computer Organization knowledge? Preparing for interviews ? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students.',
                    'img' => 'Computer_Organization_and_Architecture_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Computer-Organization-and-Architecture-Quiz/dp/B0191J2P3K/ref=sr_1_32?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-32',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Data Science Quiz.',
                    'desc' => 'Wishing to enhance skills on Data Science subject? Wishing to test your knowledge to determine level of Data Science subject proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in Data Science subject.',
                    'img' => 'Data_Science_Quiz.png',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Data-Science-Quiz/dp/B0193W0HUS/ref=sr_1_29?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-29',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
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
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Digital Communication Test',
                    'desc' => 'Wishing to enhance skills on Digital Communication? Wishing to test your knowledge to determine level of Digital Communication proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students.',
                    'img' => 'Digital_Communication_Test.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Digital-Communication-Test/dp/B01BI8M7NU/ref=sr_1_17?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-17',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
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
                    'updated_at' => NULL,
                    'type' => 'apps'
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
                    'updated_at' => NULL,
                    'type' => 'apps'
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
                    'updated_at' => NULL,
                    'type' => 'apps'
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
                    'updated_at' => NULL,
                    'type' => 'apps'
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
                    'updated_at' => NULL,
                    'type' => 'apps'
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
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'JavaScript Programming MCQ.',
                    'desc' => 'Wishing to enhance skills on JavaScript Programming? Wishing to test your knowledge to determine level of JavaScript Programming proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in JavaScript Programming.',
                    'img' => 'JavaScript_Programming_MCQ.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-JavaScript-Programming-MCQ/dp/B019AEMV7G/ref=sr_1_4?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-4',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Linux MCQ.',
                    'desc' => 'Wishing to enhance skills on Linux? Wishing to test your knowledge to determine level of Linux proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in Linux .',
                    'img' => 'Linux_MCQ.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Linux-MCQ/dp/B01991W6VG/ref=sr_1_25?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-25',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Linux tutorial + quiz.',
                    'desc' => 'Wishing to enhance skills on Linux Environment&Administration? Wishing to test your Linux Programming knowledge? Preparing for interviews ? Preparing for entrance examinations? Linux tutorial covers various sections of process management, file management, signal handling, linux shell programming, awk programming, linux sysfs, GCC compiler, GDB debugger and so on. The test will include multiple choice questions. Each attempt you can answer 10 questions in random. After you finish the questions, you will see the review pageandscore sheet. This application will be useful for all: Experienced,Freshersand Students.',
                    'img' => 'Linux_tutorial_quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Linux-tutorial-quiz/dp/B019ADSVXU/ref=sr_1_5?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-5',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'LISP Programming Quiz.',
                    'desc' => 'Wishing to enhance skills on Lisp Programming? Wishing to test your knowledge to determine level of Lisp Programming proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in Lisp Programming',
                    'img' => 'LISP_Programming_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-LISP-Programming-Quiz/dp/B0193IUDR4/ref=sr_1_30?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-30',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Microprocessor Quiz',
                    'desc' => 'Wishing to enhance skills on Microprocessor? Preparing for interviews ? Preparing for entrance examinations? The test will include multiple choice questions. Each attempt you can answer 10 questions in random. After you finish the questions, you will see the review page and score sheet. This test will be useful for all: Experienced, Freshers and Students.',
                    'img' => 'Microprocessor_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Microprocessor-Quiz/dp/B018Z82KO2/ref=sr_1_16?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-16',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'MongoDB Quiz.',
                    'desc' => 'Wishing to enhance skills on MongoDB database? Wishing to test your knowledge to determine level of MongoDB database proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in MongoDB database.',
                    'img' => 'MongoDB_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-MongoDB-Quiz/dp/B019508X8Q/ref=sr_1_28?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-28',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'My Blackboard',
                    'desc' => 'My Blackboard turns your phone into a classical blackboard, where you can draw with colored chalks. You can email new images to your friends. You can view the gallery of your images.You can just save them. This application will be interesting to childeren :) You can just use this to play games like domineering, dots and boxes, sprouts, or etc. This application also may help you on exams :) This can be used as a tool for visual presentation of problems in different fields of engineering or science like drawing electrical engineering.',
                    'img' => 'My_Blackboard.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-My-Blackboard/dp/B019LN62AI/ref=sr_1_1?s=mobile-apps&ie=UTF8&qid=1531037876&sr=1-1',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'My Calculator.',
                    'desc' => '"My Calculator" is a basic calculator for your every day needs. This calculator can assist you in calculating simple arithmetic. It has a clean and simple user interface and it is very easy to use. "My Calculator" is a lightweight application designed for everyone looking for simplicity and functionality. Two modes are available: do basic calculations in Portrait Mode or go advanced in Landscape Mode. Memory buttons will help you out with complex calculations.',
                    'img' => 'My_Calculator.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-My-Calculator/dp/B0196HMGDQ/ref=sr_1_27?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-27',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'My_Calculator.',
                    'desc' => 'This application is designed for the following purposes: Add Contact Add Group Contact View Contact Details View SMS History View Call History View Contacts in Descending order Search Contact By Email Search Contact By Phone Send SMS Update Contact Email.',
                    'img' => 'My_Calculator.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-My-Calculator/dp/B0196HMGDQ/ref=sr_1_27?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-27',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'My Memory: Train your memory',
                    'desc' => 'Train your brain! Play this game every day. Keep your brain in shape! Click on two tiles to find two matching pictures. You can choose among three different sets of images. Scores results are saved. Good luck :)',
                      'img' => 'My_Memory_Train_your_memory.jpg',
                    'url' => 'https://www.amazon.com/My-Memory-Train-your-memory/dp/B019B0A9DM/ref=sr_1_34?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-34',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'My Mine Finder',
                    'desc' => '"My Mine Finder" is a classic Minesweeper game. Rules are simple: Find the empty squares while avoiding the mines. The faster you clear the board, the better your score. There are available two modes in this application: easy mode and advanced mode.',
                    'img' => 'My_Mine_Finder.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-My-Mine-Finder/dp/B0198BCLYY/ref=sr_1_26?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-26',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'My Tic-Tac-Toe',
                    'desc' => 'This is an interactive game of good old fashioned tic-tac-toe! Plan ahead and beat the computer at tic tac toe. The game includes automatic scoring and alternating "first moves". You can save or share your scores via email or sms. Enjoy!',
                    'img' => 'My_Tic_Tac_Toe.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-My-Tic-Tac-Toe/dp/B0195LPMIE/ref=sr_1_13?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-13',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Operating System Quiz.',
                    'desc' => 'Wishing to enhance skills on Operating Systems? Wishing to test your knowledge to determine level of Operating Systems proficiency? Preparing for interviews? Preparing for entrance examinations?',
                    'img' => 'Operating_System_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Operating-System-Quiz/dp/B0198EX6FO/ref=sr_1_35?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-35',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'PHP Advanced MCQ.',
                    'desc' => 'Wishing to enhance skills on PHP Advanced Programming? Wishing to test your knowledge to determine level of PHP Programming proficiency? Preparing for interviews? Preparing for entrance examinations?',
                    'img' => 'PHP_Advanced_MCQ.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-PHP-Advanced-MCQ/dp/B0196WTS0U/ref=sr_1_21?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-21',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'PHP Programming MCQ.',
                    'desc' => 'Wishing to enhance skills on PHP Programming? Wishing to test your knowledge to determine level of PHP Programming proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in PHP Programming.',
                    'img' => 'PHP_Programming_MCQ.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-PHP-Programming-MCQ/dp/B0196QP1DY/ref=sr_1_10?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-10',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Python Quiz.',
                    'desc' => 'Wishing to enhance skills on Python programming language? Wishing to test your knowledge to determine level of Python programming proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in Python programming.',
                    'img' => 'Python_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Python-Quiz/dp/B0196KA414/ref=sr_1_9?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-9',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Simple Timer.',
                    'desc' => 'This application is setting up a countdown timer, after you select the time from given list that you would like the application to count down from.',
                    'img' => 'Simple_Timer.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Simple-Timer/dp/B019FICYEC/ref=sr_1_8?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-8',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Software Architecture & Design Quiz.',
                    'desc' => 'Wishing to enhance skills on Software Architecture & Design? Preparing for interviews ? Preparing for entrance examinations? The test will include multiple choice questions. Each attempt you can answer 10 questions in random. After you finish the questions, you will see the review page and score sheet. This test will be useful for all: Experienced, Freshers and Students.',
                    'img' => 'Software_Architecture & Design_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Software-Architecture-Design/dp/B018W7HYXS/ref=sr_1_6?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-6',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Software Engineering Quiz.',
                    'desc' => 'Wishing to enhance skills on Software Engineering? Wishing to test your knowledge to determine level of Software Engineering proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in Software Engineering.',
                    'img' => 'Software_Engineering_Quiz.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Software-Engineering-Quiz/dp/B0195B1IIM/ref=sr_1_22?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-22',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

            DB::table('applications')->insert(array(
                array(
                    'name' => 'Spell Checker.',
                    'desc' => 'Spell Checker application is designed to help you quickly find out the spelling and grammar mistakes and learn new words.',
                    'img' => 'Spell_Checker.jpg',
                    'url' => 'https://www.amazon.com/Inna-Tarasyan-Spell-Checker/dp/B0198TUBBG/ref=sr_1_3?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-3',
                    'user_id' => 1,
                    'created_at' =>  NULL,
                    'updated_at' => NULL,
                    'type' => 'apps'
                )
            ));

        }
    }
}
