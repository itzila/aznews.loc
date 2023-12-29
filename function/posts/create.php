<?php

require_once '../connect.php';


$connect = connect();


if ($connect->prepare("
    INSERT INTO posts(tag_id, name, description, image)
    VALUES(:tag_id, :name, :description, :image);
    ")->execute([
        "tag_id" => $_POST["tag_id"],
        "name" => $_POST["name"],
        "description" => $_POST["description"],
        "image" => move_uploaded_file(
            $_FILE['photo']['tmp_name'],
            'movie/' .$_FILE['photo']['name']
        ),
    ])
)
{
    header('Location: '.SERVER_PATH.'admin.php');
}
