
<?php
require 'controllers/indexController.php';
include("navigation.php");
/* include("database.php");  */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Fakebook</title>
</head>

<body>
    <div class="container">
        <div class="sidebar-left">
            <div class="sidebar-title">
                <h2>Liens utiles</h2>
                <span>&middot;&middot;&middot;</span>
            </div>
            <div class="imp-links">
                <a href="#"><img src="images/shortcut-1.png"> Conférence Développeur Web</a>
                <a href="#"><img src="images/shortcut-2.png"> Conférence HTML/CSS</a>
                <a href="#"><img src="images/shortcut-3.png"> Conférence Python</a>
                <a href="#"><img src="images/shortcut-4.png"> Conférence C++</a>
            </div>
        </div>
        <div class="main-content">
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="login-form">
                <h2>LOGIN</h2><br>
                <label for="username" name="username">USERNAME :</label>
                <input type="text" name="username" autocomplete="off"><br><br>
                <label for="password" name="password">PASSWORD :</label>
                <input type="password" name="password" autocomplete="off"><br><br>
                <input type="submit" name="login" value="Login"><br><br>

            </form>
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="register-form">
                <h2>REGISTER</h2><br>
                <label for="username" name="username">USERNAME :</label>
                <input type="text" name="username" autocomplete="off"><br><br>
                <label for="firstname" name="firstname">FIRSTNAME :</label>
                <input type="text" name="firstname" autocomplete="off"><br><br>
                <label for="lastname" name="lastname">LASTNAME :</label>
                <input type="text" name="lastname" autocomplete="off"><br><br>
                <label for="password" name="password">PASSWORD :</label>
                <input type="password" name="password" autocomplete="off"><br><br>
                <label for="passwordverif" name="passwordverif">VERIFICATION :</label>
                <input type="password" name="asswordverif" autocomplete="off"><br><br>
                <label for="birthdate" name="birthdate">BIRTHDATE :</label>
                <input type="date" name="birthdate" autocomplete="off"><br><br>
                <label for="email" name="email">EMAIL :</label>
                <input type="email" name="email" autocomplete="off"><br><br>
                <label for="telephone" name="telephone">TELEPHONE (optional) :</label>
                <input type="text" name="telephone" autocomplete="off"><br><br>
                <input type="submit" name="register" value="Register"><br><br>

            </form>
            <div class="ipsum">
                <h2>LOREM IPSUM</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque consequatur a tempora harum beatae debitis culpa vel neque asperiores! Culpa dolores repudiandae libero a cumque laborum saepe consectetur et beatae aliquam corrupti modi quidem accusantium quas, nisi quod harum distinctio itaque placeat quisquam accusamus repellat. Pariatur cumque impedit vel, dolores recusandae modi.
                    Provident quo doloremque commodi pariatur quasi expedita consequuntur nostrum ullam culpa molestias nulla aliquam voluptates perferendis, vitae in incidunt neque molestiae similique blanditiis, ea illum eos. Ad veritatis aliquid saepe doloribus minima. Doloribus amet vero fugit, ullam possimus esse vitae debitis aspernatur sequi, repudiandae omnis. Voluptatum, fugiat iusto!</p>
            </div>
            <div class="ipsum">
                <h2>LOREM IPSUM</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque consequatur a tempora harum beatae debitis culpa vel neque asperiores! Culpa dolores repudiandae libero a cumque laborum saepe consectetur et beatae aliquam corrupti modi quidem accusantium quas, nisi quod harum distinctio itaque placeat quisquam accusamus repellat. Pariatur cumque impedit vel, dolores recusandae modi.
                    Provident quo doloremque commodi pariatur quasi expedita consequuntur nostrum ullam culpa molestias nulla aliquam voluptates perferendis, vitae in incidunt neque molestiae similique blanditiis, ea illum eos. Ad veritatis aliquid saepe doloribus minima. Doloribus amet vero fugit, ullam possimus esse vitae debitis aspernatur sequi, repudiandae omnis. Voluptatum, fugiat iusto!</p>
            </div>
        </div>
        <div class="sidebar-right">
            <div class="sidebar-title">
                <h2>Events</h2>
                <span>&middot;&middot;&middot;</span>
            </div>
            <div class="events">
                <div class="left-event">
                    <h2>18</h2>
                    <p>Décembre</p>
                </div>
                <div class="right-event">
                    <h2>Conférence </h2>
                    <p>Parc du Château</p>
                    <small>17h à 19h</small>

                </div>
            </div>
            <div class="events">
                <div class="left-event">
                    <h2>21</h2>
                    <p>Janvier</p>
                </div>
                <div class="right-event">
                    <h2>Meeting Devs</h2>
                    <p>Parc des veneurs</p>
                    <small>19h à 21h</small>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php include("footer.php") ?>