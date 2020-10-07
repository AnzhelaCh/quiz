<?php
session_start();
require('db_script.php');

function load_page()
{
    $page=getPage();
    routing($page);
}

function getPage()
{
    $result= 'quizList';
    $array=explode('/',$_SERVER['REQUEST_URI']);
    $page=array_pop($array);

    if($page != null)
    {
        $array=explode('?',$page);
         $result=array_shift($array);
    }
return $result;
}

function routing($page)
{
    switch($page)
    {
        case "quizList":
            $controller="controller_quizList.php";

        break;

         case "action_user_answer":
            $controller="controller_action_user_answer.php";
         break;

         case "addQuestionToQuiz":
              $controller="controller_add_question.php";
         break;

         case "delete_question":
              $controller="controller_delete_question.php";
          break;

         case "edit_question":
             $controller="controller_edit_question.php";
         break;

         case "action_edit_data":
             $controller="controller_action_edit_data.php";
             break;

         case "action_sent_question.php":
             $controller="controller_action_sent_question.php";
             break;

        case "pagination":
            $controller="controller_pagination.php";
            break;


    }
require ("views/template_view.php");
}


?>