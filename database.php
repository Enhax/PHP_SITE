<?php

$db_server = "localhost";
$db_user ="root";
$db_password = "";
$db_name = "?";
$_connexion = ""; 

try{
    $connexion = mysqli_connect($db_server,
                                $db_user,
                                $db_password,
                                $db_name);
}
catch(mysqli_sql_exception){
    echo "La connexion a échouée!";
}

if($connexion){
    echo "Vous êtes connecté!";
}

?>