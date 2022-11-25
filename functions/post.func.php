<?php


function get_post()
{
    global $db;

    $req = $db->query("
    
    SELECT 
            posts.id,
            posts.title,
            posts.image,
            posts.content,
            posts.date
            admins.name
    FROM    posts
    JOIN    admins
    On      posts.wrtiter = admins.email
    WHERE   posts.id='{$_GET['id']}'
    AND posts.posted = '1'
    
    ");

    $result = $req->fetchObject();

    return $result;
}
