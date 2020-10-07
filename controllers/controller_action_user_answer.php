<?php

require('models/model_quizList.php');

$quizList=get_data('question');
$AnswerList=get_Answer('answer');
require('views/view_user_answer.php');



?>