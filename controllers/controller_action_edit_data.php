<?php
require('models/model_edit_question.php');
require('models/model_quizList.php');

    $questionName=$_REQUEST['questionName'];

    $answer_name_array=$_REQUEST['newAnswer'];
    $id_Answer=$_REQUEST['arrayIdAnswer'];

    $is_correct_array=$_REQUEST['correctAnswerArray'];
    $id=$_REQUEST['number'];

    update_data($id,'question',['name'=>$questionName]);

    foreach($answer_name_array as $key=>$answer)
    {
        $answerData="$answer";

        foreach($is_correct_array as $k=>$is_correct)
        {
            foreach($id_Answer as $point=>$idAnswer)
            {

                if ($k==$key && $k==$point)
                {

                    update_data_condition($idAnswer,$id,'answer',['question_id'=>$id,
                                                                        'is_correct'=>$is_correct,
                                                                        'answer_name'=>"$answerData"
                                                                        ]);


                }
            }
        }
    }

header("Location:quizList");
exit;
?>