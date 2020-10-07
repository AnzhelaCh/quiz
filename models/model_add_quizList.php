<?php
function insert_data_return_id($table,$array)
{
    $query=build_insert_query($table,$array);
    return execute_query_and_return_id($query);

}


function insert_data($table,$array)
{
    $query=build_insert_query($table,$array);
    execute_query($query);

}

function insert_data_array($table,$array)
{
    $query=build_insert_query($table,$array);
    execute_query($query);

}


?>