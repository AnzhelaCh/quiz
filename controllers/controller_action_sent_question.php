
<?php

require('models/model_quizList.php');
require('models/model_add_quizList.php');

    $quizList=get_data('question');
    $answerList=get_data('answer');


require('views/view_add_question.php');
    $questionName=$_POST['questionName'];
    $answer_name_base=$_POST['newAnswer'];
    $answer_name=$_POST['DynamicExtraField'];
    $is_correct_base=$_POST['correctAnswerBase'];
    $is_correct=$_POST['correctAnswer'];

    $newId=insert_data_return_id('question',['name'=>$questionName]);
    $number="$newId";

    $insert_Answer_base=insert_data('answer',['answer_name'=>$answer_name_base,
                                          'is_correct'=>$is_correct_base,
                                          'question_id'=>$number



]);
    $count=-1;
    foreach($is_correct as $key=>$value)
    {
    $count++;

        foreach($answer_name as $point=>$data)
        {

            if($point==$count)
            {

                insert_data('answer',['answer_name'=>$data,
                            'is_correct'=>$value,
                            'question_id'=>$number

                            ]);
            }

        }


    }
header('Location:addQuestionToQuiz');
exit;
?>