<?php
function edit_data($table,$where=null)
{
    $query=build_edit_query($table,$where);
    execute_query($query);
}

function update_data($id,$table,$array)
{
    $query=build_update_query($id,$table,$array);
    execute_query($query);

}

function update_data_condition($id_Answer,$id,$table,$array)
{
    $query=build_update_condition_query($id_Answer,$id,$table,$array);
    execute_query($query);

}
?>