<?php

require_once __DIR__ . '/../functions/db.php';

function Photo_getAll()
{
    $query = 'SELECT * FROM `images`';
    return sql_query($query);
}

function photo_insert($data)
{
    $query = "INSERT INTO `images` (title, path) VALUES ('" . $data['title'] ."', '" . $data['image'] ."')";
    sql_exec($query);
}