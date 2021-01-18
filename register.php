<?php
session_start();

$email = '';
$password = '';

if (isset($_POST['submit'])) {
    //Require database in this file & image helpers
    /** @var mysqli $db */
    require_once "back_end.php";

    //Postback with the data showed to the user, first retrieve data from 'Super global'
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = $_POST['password'];

    $errors = [];
    if ($email == '') {
        $errors['email'] = 'The email cannot be empty';
    }
    if ($password == '') {
        $errors['password'] = 'The password cannot be empty';
    }

    if (empty($errors)) {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (email, password) VALUE('$email', '$password')";
        $result = mysqli_query($db, $query)
        or die('<h1>Error: er is al een account met deze E-mail</h1>' );

        if ($result) {
            header('Location: login.php');
            exit;
        } else {
            $errors[] = 'Something went wrong in your database query: ' . mysqli_error($db);
        }

        //Close connection
        mysqli_close($db);
    }
}
?>

<link rel="stylesheet" href="altstyle.css">
<div class="header">
    home
</div>
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
        <section>
            <h2>Nieuwe gebruiker registeren</h2>
            <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
                <div class="data-field">
                    <label for="email">E-mail</label><br>
                    <input id="email" type="email" name="email" value="<?= $email ?>"/>
                    <span class="errors"><?= isset($errors['email']) ? $errors['email'] : '' ?></span>
                </div>
                <div class="data-field">
                    <label for="password">Password</label><br>
                    <input id="password" type="password" name="password"/>
                    <span class="errors"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
                </div>
                <div class="data-submit">
                    <input type="submit" name="submit" value="Save"/>
                </div>
                <a href="login.php">Login pagina</a>
            </form>
        </section>
    </div>
    <script src="js.js"></script>
    </body>
</div><?php
