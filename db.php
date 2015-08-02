<?php

function create_news($title, $author, $content) {
    $connect = mysql_connect('localhost', 'root', '');
    mysql_select_db('example');
    if (!mysql_query("INSERT INTO news (title, author, content, public_date) VALUES ('".$title."', '".$author."','".$content."', '". date('Y-m-d H:i:s') ."' )", $connect)) {
        echo 'Error: ', mysql_error($connect);
    }
}

function create_juri($name, $url, $descriphion) {
    $connect = mysql_connect('localhost', 'root', '');
    mysql_select_db('example');
    if (!mysql_query("INSERT INTO juri (name, url, descriphion) VALUES ('".$name."', '".$url."','".$descriphion."')",$connect)) {
        echo 'Error: ', mysql_error($connect);
    }
}

function create_page($title, $link, $content,$is_active) {
    $connect = mysql_connect('localhost', 'root', '');
    $is_active = $is_active == 'on' ? 1 : 0;
    mysql_select_db('example');
    if (!mysql_query("INSERT INTO page (title,link,content,is_active) VALUES ('".$title."', '".$link."','".$content."',".$is_active.")",$connect)) {
        echo 'Error: ', mysql_error($connect);
    }
}

function create_menu($name, $url)
{
    $connect = mysql_connect('localhost', 'root', '');
    mysql_select_db('example');
    if (!mysql_query("INSERT INTO menu (name, url) VALUES ('" . $name . "', '" . $url . "')", $connect)) {
        echo 'Error: ', mysql_error($connect);
    }
}


function get_news() {
    $connect = mysql_connect('localhost', 'root', '');
    mysql_select_db('example');
    $result = mysql_query("SELECT * FROM news", $connect);
    $news = array();
    While($row = mysql_fetch_assoc($result)) {
        $news[] = $row;
    }
    mysql_close($connect);
    return $news;
}

function get_juri() {
    $connect = mysql_connect('localhost', 'root', '');
    mysql_select_db('example');
    $result = mysql_query("SELECT * FROM juri", $connect);
    $juri = array();
    While($row = mysql_fetch_assoc($result)) {
        $juri[] = $row;
    }
    mysql_close($connect);
    return $juri;
}

function get_news_view($id) {
    $connect = mysql_connect('localhost', 'root', '');
    mysql_select_db('example');
    $result = mysql_query("SELECT * FROM news where id=".$id, $connect);
    $news = array();
    While($row = mysql_fetch_assoc($result)) {
        $news[] = $row;
    }
    mysql_close($connect);
    return $news;
}

function get_page_view($link) {
    $connect = mysql_connect('localhost', 'root', '');
    mysql_select_db('example');
    $result = mysql_query("SELECT * FROM page where link='".$link."'", $connect);
    $page = array();
    While($row = mysql_fetch_assoc($result)) {
        $page[] = $row;
    }
    mysql_close($connect);
    return $page[0];
}