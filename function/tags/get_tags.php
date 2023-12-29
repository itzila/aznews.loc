<?php
require_once 'function/connect.php';


function show_tag(int $id)
{
    $connect = connect();
    return $connect->query("
        SELECT * FROM tags
            WHERE id={$id};
    ");
}

function all_tag()
{
    $connect = connect();
    return $connect->query("SELECT * FROM tags;");
}
