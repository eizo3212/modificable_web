<?php
require("./conf.php");

$contenido = $_POST['editor'];
$title = $_POST['title'];
$id = $_POST['id'];
$img = $_FILES['imagen']['tmp_name'];
$data = fopen($img, 'r+b');
$imagen = fread($data, filesize($img));
$grado = $_POST['grado'];

    $checked_contador = count($_POST['grado']);
    $gradoini = intval($grado[0]);
    $gradofinal = intval($grado[$checked_contador-1]);



//agregar post
if (isset($_POST['submit'])) {
    $statement = $link->prepare ("INSERT INTO post (contenido,titulo,imagen,grado,gradofinal) 
    VALUES (:contenido,:title,:imagen,:grado,:gradofinal)");

    $statement->bindParam(':contenido', $contenido);
    $statement->bindParam(':title', $title);
    $statement->bindParam(':imagen', $imagen);
    $statement->bindParam(':grado', $gradoini);
    $statement->bindParam(':gradofinal', $gradofinal);

    $statement->execute();

    if (isset($statement)) {
    header('location:admin.php');}

    

}

//editar post
elseif (isset($_POST['edit'])) {
    $statement = $link->prepare ("UPDATE post set contenido = :contenido, titulo = :title where id =$id");

    $statement->bindParam(':contenido', $contenido);
    $statement->bindParam(':title', $title);
    $statement->execute();


    if (isset($statement)) {
    header('location:admin.php');}
}

elseif (isset($_GET['eliminar'])) {

    $del = $_GET['eliminar']; 
    $statement=$link->query("DELETE FROM post WHERE id=$del")->fetch();

    if (isset($statement)) {
        header('location:admin.php');
    }
}








