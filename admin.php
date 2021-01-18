<?php
/**
 * @var mysqli $db
 */
session_start();

//If our session doesn't exist, redirect & exit script
if (!isset($_SESSION['loggedInUser'])) {
    header('Location: login.php');
    exit;
}
//Get user information from session
$loggedInUser = $_SESSION['loggedInUser'];

require_once "back_end.php";
?>

<link rel="stylesheet" href="style.css">
<div class="navbar">
Commission
    <div id = logout>
    <a href="logout.php" class="navbuttons">logout</a>
</div>
    </div>
<body>
    <div id="background">
        <img class="slide fade" src="bckgrnd1.png" style="width:100%" height="100%">
        <img class="slide fade" src="bckgrnd2.png" style="width:100%" height="100%">
        <img class="slide fade" src="bckgrnd3.png" style="width:100%" height="100%">
        <img class="slide fade" src="bckgrn4.png" style="width:100%" height="100%">
    </div>
    <div id ="admin">
        <section>
            <?php
            $sql = "SELECT id, naam_klant, email, commissie, beschrijving FROM klanten";
            $result = $db->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<b><h2></b> " . $row["id"]. "</h2>" . "<br>" . "<b>Naam: </b> " . $row["naam_klant"]. "<br> " . " <b>E-mail:</b> " .
                $row["email"]. "<br>" . " <b>Commissie:</b> " . $row["commissie"].
                "<br>" . " <b>Beschrijving:</b> " . $row["beschrijving"]."<br>" ?> <a href="delete.php?id=<?= $row['id'];?>" class="delete">Delete</a> <?php "<br>";
            }
            $db->close();
            }
            ?>

        </section>

    </div>
    </div>

    <script src="js.js"></script>
</body>
