
<?php
session_start();
if (isset($_POST["login"])) {

    if (!empty($_POST["username"]) && (!empty($_POST["password"]))) {

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

         if (password_verify($_POST["password"], $hash)){

        echo "<br>Vous êtes connecté!";
        header("location: home.php");
          }
    }
} else {
    echo "<br>Champ incorrect!";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
        echo "<br>Entrez un nom d'utilisateur";
    } else if (empty($_POST["firstname"])) {
        echo "<br>Entrez un prénom";
    } else if (empty($_POST["lastname"])) {
        echo "<br>Entrez un nom de famille";
    } else if (empty($_POST["password"])) {
        echo "<br>Entrez un mot de passe";
    } else if (empty($_POST["passwordverif"])) {
        echo "<br>Entrez la vérification du mot de passe";
    } else if (empty($_POST["email"])) {
        echo "<br>Entrez un email valide";
    } else {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $firstname = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_SPECIAL_CHARS);
        $lastname = filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $birthdate = $_POST["birthdate"];
        $telephone = filter_input(INPUT_POST, "telephone", FILTER_SANITIZE_NUMBER_INT);
    }

    $hash = password_hash("password", PASSWORD_DEFAULT);
    $hashverif = password_hash("passwordverif", PASSWORD_DEFAULT);

    /*   if (password_verify($_POST["password"], $hash)) {
        echo "<br>Vous êtes maintenant enregistré !";
        header("location: home.php");
    } else {
        echo "<br>Une erreur s'est produite !";
    } */
}