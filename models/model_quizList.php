<?php
function get_data($table,$where=null,$what=null)
{
    $query=build_select_query($table,$where,$what);
    return execute_select_query($query);

};


function get_Answer(){

    $query="SELECT answer_name,question_id,id,is_correct
            FROM answer
            JOIN question
            ON answer.question_id=question.id";
    return execute_select_query($query);
}



?>