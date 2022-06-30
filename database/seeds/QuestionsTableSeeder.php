<?php

use App\Options;
use App\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $question1 = new Question();
        $question1->topic_id = 1;
        $question1->question_text = 'Question 1';
        $question1->save();

        $q1answer1 = new Options();
        $q1answer1->question_id = 1;
        $q1answer1->option = '*reponse 1';
        $q1answer1->correct = 1;
        $q1answer1->save();

        $q1answer2 = new Options();
        $q1answer2->question_id = 1;
        $q1answer2->option = 'reponse 2';
        $q1answer2->save();

        $q1answer3 = new Options();
        $q1answer3->question_id = 1;
        $q1answer3->option = 'reponse 3';
        $q1answer3->save();

        $question2 = new Question();
        $question2->topic_id = 1;
        $question2->question_text = ' Question 2';
        $question2->save();

        $q2answer1 = new Options();
        $q2answer1->question_id = 2;
        $q2answer1->option = 'reponse A';
        $q2answer1->save();

        $q2answer2 = new Options();
        $q2answer2->question_id = 2;
        $q2answer2->option = '*reponse B';
        $q2answer2->correct = 1;
        $q2answer2->save();

        $q2answer3 = new Options();
        $q2answer3->question_id = 2;
        $q2answer3->option = 'reponse C';
        $q2answer3->save();

        $question3 = new Question();
        $question3->topic_id = 1;
        $question3->question_text = 'Question 3:';
        $question3->save();

        $q3answer1 = new Options();
        $q3answer1->question_id = 3;
        $q3answer1->option = '*Reponse X';
        $q3answer1->correct = 1;
        $q3answer1->save();

        $q3answer2 = new Options();
        $q3answer2->question_id = 3;
        $q3answer2->option = 'Reponse Y';
        $q3answer2->save();

        $q3answer3 = new Options();
        $q3answer3->question_id = 3;
        $q3answer3->option = 'Reponse Z';
        $q3answer3->save();
    }
}
