<?php
function agregar ()
{
    require('./conf.php');

    /*$id= $link->query("SELECT MAX(id) from post")->fetch();
    $num=$id[0];*/
    
    $post = $link->query("SELECT contenido FROM post WHERE id=$num")->fetch();
    echo $post["contenido"]; 
}
function edit($var)
{
    require('./conf.php');

    $post = $link->query("SELECT contenido, imagen  FROM post WHERE id=$var")->fetch();
    echo $post["contenido"]; 
}

