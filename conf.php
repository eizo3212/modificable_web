<?php
//llamar base de datos
$link = new PDO ("mysql:host=localhost; dbname=editor_texto", 
"root","");
//conocer el max id
$id= $link->query("SELECT MAX(id) from post")->fetch();
$num=$id[0];

//estado de sesion y permisos
//$sesion = false;
//$admin = false;
//resetear autoincrement 
if ($num == '' || $num<=0 || $num == null) {
    $link->query('ALTER TABLE post AUTO_INCREMENT = 1');
    
}

//contar numero filas
$sql = $link->query('SELECT * FROM post');
$total_filas = $sql->rowCount();


//datos de sesion

/*
$user = $link->query("SELECT * FROM users INNER JOIN alumnos on users.alumno=alumnos.id where users.id = $u")->fetch();
$iu = $user['grado'];
$gradus = $link->query("SELECT * from cursos WHERE id=$iu")->fetch();
*/

//mostrar alumnos
/*$sql_alumno = "SELECT * FROM alumnos INNER JOIN cursos ON alumnos.grado = cursos.id";
$alumno = $link->query($sql_alumno)->fetch();
$nombre= $alumno['f_name']." ".$alumno['s_name']." ".$alumno['f_apellido']." ".$alumno['s_apellido'];
$grado = $alumno['grado'].$alumno['grado1'];
*/
//mostrar todo de tabla post


//cambiar autoincrement cuando se elimine un fila
/*if ($num != $total_filas) {
    $link->prepare("ALTER TABLE post AUTO_INCREMENT = $total_filas");
    $link->execute();
}*/





  
