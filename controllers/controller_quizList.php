<?php

    require('models/model_quizList.php');
    $quizList=get_data('question');
    $AnswerList=get_Answer('answer');

        if(!empty($_POST['next']))
        {

            if (!isset($_COOKIE['Ind_Counter']) )
                $_COOKIE['Ind_Counter'] = 0;
                $_COOKIE['Ind_Counter']++;
                setcookie('Ind_Counter', $_COOKIE['Ind_Counter']);
                $a = $_COOKIE['Ind_Counter'];


                $count = 0;
                foreach ($_POST as $key => $value) {
                    ++$count;
                    if ($count <= 1) {

                        $_SESSION['question'][] = array($key, $value);

                    }

                }




        }

    if(!empty($_POST['button']))
{
    foreach ($_SESSION['question'] as $id=>$resultArray)
    {
        $id_array[]=$resultArray[0];
        $userUnswer[]=$resultArray[1];

        $score=explode('?',$resultArray[1]);

        $answerNameUser=array_shift($score);
        $answerNameArray[]=$answerNameUser;

        $score=array_pop($score);
        $scoreArray[]=$score;

        if($score=="1")
        {
            $totalScore[]=$score;
        }




    }

    require('views/view_user_answer.php');

}

if(!empty($_REQUEST['come_back']))
{
    unset($_COOKIE['Ind_Counter']);
    setcookie('Ind_Counter', "", -1);

    session_unset();





}
require('views/view_quizList.php');

?>