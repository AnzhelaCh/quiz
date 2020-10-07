<?php
    require('models/model_quizList.php');
    require('models/model_delete_question.php');

    $questionId=$_GET['questionId'];


    delete_data('question',['id'=>$questionId]);
    delete_data('answer',['question_id'=>$questionId]);

    header("Location:quizList");
?>