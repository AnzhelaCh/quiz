<?php
require('models/model_quizList.php');
require('models/model_edit_question.php');
require('core/function_add_question.php');
require('models/model_add_quizList.php');

    $questionId=$_GET['questionId'];

    $questionList=get_data('question');

    $AnswerList=get_data('answer');

    $count=0;
    foreach($questionList as $key=>$value)
    {
        $count++;

        foreach($value as $k=>$val)
        {
            if($val==$questionId)
            {
                $question_name=$value['name'];

            }
        }


    }
        foreach($AnswerList as $point=>$data)
        {
            if($questionId==$data['question_id'])
            {

                $answer_name[]=$data['answer_name'];
                $get_id_Answer[]=$data['answer_id'];
            }

        }


require('views/views_edit_question.php');


?>