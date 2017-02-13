<?php

function sql_connect()
{
    $dbc = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($dbc, 'test');
}


function sql_query($query)
{
//    sql_connect();
    $dbc = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($dbc, 'test');

    mysqli_query($dbc, "SET NAMES utf8");
    $res = mysqli_query($dbc, $query);

    $ret = [];
    while ($row = mysqli_fetch_assoc($res)) {
        $ret[] = $row;
    }

    return $ret;
}


function sql_exec($query)
{
//    sql_connect();
    $dbc = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($dbc, 'test');

    mysqli_query($dbc, "SET NAMES utf8");
    mysqli_query($dbc, $query);

}
