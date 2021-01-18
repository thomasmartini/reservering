
<?php
session_start();
//Require database in this file
/** @var mysqli $db */
require_once "back_end.php";

//Check if user is logged in, else move to secure page
if (isset($_SESSION['loggedInUser'])) {
    header("Location: admin.php");
    exit;
}

//If form is posted, lets validate!
if (isset($_POST['submit'])) {
    //Retrieve values (email safe for query)
    $email = mysqli_escape_string($db, $_POST['email']);
    $password = $_POST['password'];

    //Get password & name from DB
    $query = "SELECT *
              FROM users
              WHERE email = '$email'";
    $result = mysqli_query($db, $query) or die('Error: '.$query);
    $user = mysqli_fetch_assoc($result);

    //Check if email exists in database
    $errors = [];
    if ($user) {
        //Validate password
        if (password_verify($password, $user['password'])) {
            //Set email for later use in Session
            $_SESSION['loggedInUser'] = [
                'name' => $user['name'],
                'id' => $user['id']
            ];

            //Redirect to secure.php & exit script
            header("Location: admin.php");
            exit;
        } else {
            $errors[] = 'Uw logingegevens zijn onjuist';
        }
    } else {
        $errors[] = 'Uw logingegevens zijn onjuist';
    }
}
?>
<link rel="stylesheet" href="style.css">
<body>
<div id="container">
    <div id="background">
        <img class="slide fade" src="bckgrnd1.png" style="width:100%" height="100%">
        <img class="slide fade" src="bckgrnd2.png" style="width:100%" height="100%">
        <img class="slide fade" src="bckgrnd3.png" style="width:100%" height="100%">
        <img class="slide fade" src="bckgrn4.png" style="width:100%" height="100%">
    </div>
    <body>
    <div>
        <section id = login>
            <h1>Login</h1>
            <?php if (isset($errors) && !empty($errors)) { ?>
                <ul class="errors">
                    <?php for ($i = 0; $i < count($errors); $i++) { ?>
                        <li><?= $errors[$i]; ?></li>
                    <?php } ?>
                </ul>
            <?php } ?>

            <form id="login" method="post" action="<?= $_SERVER['REQUEST_URI']; ?>">
                <div>
                    <label for="email">E-mail</label><br>
                    <input type="email" name="email" id="email" value="<?= (isset($email) ? $email : ''); ?>"/>
                </div>

                <div>
                    <label for="password">Wachtwoord</label><br>
                    <input type="password" name="password" id="password"/>
                </div>
                <div>
                    <input type="submit" name="submit" value="Login"/>
                </div>
            </form>
            <a href="register.php">Register</a>
            <div id = sectionSucces>
                <h1>succes</h1>
            </div>

        </section>
    </div>
    <script src="js.js"></script>
    </body>
</div><?php


