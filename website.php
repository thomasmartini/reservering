<?php
/**
 * @var mysqli $db
 */


//Check if Post isset, else do nothing
if (isset($_POST['submit'])) {
    //Require database in this file
    require_once "back_end.php";

    //Postback with the data showed to the user, first retrieve data from 'Super global'
     $commissie = mysqli_real_escape_string($db, $_POST['commissie']);
    $name = mysqli_escape_string($db, $_POST['name']);
    $email = mysqli_escape_string($db, $_POST['email']);
    $beschrijving = mysqli_escape_string($db, $_POST['beschrijving']);

    $errors = [];
    if ($email == '') {
        $errors['email'] = 'Your E-mail cannot be empty';
    }
    if ($beschrijving == '') {
        $errors['beschrijving'] = 'The description cannot be empty';
    }
    if ($name == '') {
        $errors['name'] = 'Your name cannot be empty';
    }
    if ($commissie == '') {
        $errors['commissie'] = 'Your commission cannot be empty';
    }
    if (empty($errors)) {
        //Save the record to the database
        $query = "INSERT INTO klanten
                  (naam_klant, commissie, email, beschrijving)
                  VALUES ('$name', '$commissie', '$email', '$beschrijving')";
        $result = mysqli_query($db, $query) or die ('Error: ' . $query . '<br>' . mysqli_error($db));

        if ($result) {
            header('Location: succes.php');
            exit;
        } else {
            $errors[] = 'Something went wrong in your database query: ' . mysqli_error($db);
        }

        //Close connection
        mysqli_close($db);
    }
}
?>
<link rel="stylesheet" href="style.css">
<div class="navbar">
    Commission
</div>
<body>
    <div id="background">
        <img class="slide fade" src="bckgrnd1.png" style="width:100%" height="100%">
        <img class="slide fade" src="bckgrnd2.png" style="width:100%" height="100%">
        <img class="slide fade" src="bckgrnd3.png" style="width:100%" height="100%">
        <img class="slide fade" src="bckgrn4.png" style="width:100%" height="100%">
    </div>
    <div id ="sectionTOS">
        <section>
        Terms of Service:<br><br>
        1. I have the rights to decline your commission request.<br>
        <br>
        2. Full payment at the start of the commission! (PayPal only.)<br>
        <br>
        3. No haggling in prices. Prices are in EURO!<br>
        <br>
        4. Please make sure you get the information right. I'm not going to make a million edits on the artwork.<br>
        So make SURE you give me the right information to draw your art piece.<br>
        <br>
        5. No returns after I've started on the piece! If I am not able to finish the artwork because of MY circumstances I will 100% refund the money!<br>
        <br>
        6. The art piece will be done within 2-3 weeks MAX depending on the size of your request.<br>
        If you are interested in the progress please contact me through Discord (Surfer#9112) or DA notes.<br>
        <br>
        7. I can do every art style that I have in my gallery. It's up to you which one you pick.<br>
        I will NOT copy art styles of other artists!<br>
        -----------------------------------------<br>

        Don'ts<br>
        <br>
        - NSFW artwork or fetish artwork.<br>
        - Hate towards certain groups/ people.<br>
        - Real life humans! (Like friends, family, celebrities.)<br>
        <br>
        -----------------------------------------<br>

        Do's:<br>
        <br>
        - Everything that is not listed in Don'ts.<br>
        -----------------------------------------<br>

        <form>
            <input type="checkbox" id="acceptTOS" name="acceptTOS" value="accept">
            <label for="acceptTOS"> I accept the Terms of Service</label><br><br>

        </form>
            <button onclick="showCommission()" class="navbuttons">next</button>
    </div>
        <div id = "sectionCommission">
            <img id="art" src="chibi.png" width="500px" height="400px">
            <div class="dropdown">
               <button onclick="showPersooninfo()" class="navbuttons">Next</button><br><br>
                <button onclick="myFunction()" class="dropbtn">Commission list</button>
                <div id="myDropdown" class="dropdown-content">
                    <a onclick="chibi()">Chibis</a>
                    <a onclick="icon()">Icons</a>
                    <a onclick="easy()">Easy Coloured</a>
                    <a onclick="detailed()">Detailed coloured</a>
                </div>

            </div>

            <div id = "commissions">
                <h2><b>Chibis = €10 /100k Bells /100k WoW gold</b></h2> <b><h3>Info:</h3></b><br> Your character in a cute Chibi art style. These are always coloured and full body. <div class="data-field"> <input id="commissie" type="hidden" name="commissie" value="chibi"/></div>
                <script src="js.js"></script>
            </div>
            <button onclick="showCommission()" class="navbuttons">back</button>
        </div>
        <div id = "sectionPersooninfo">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="data-field">
                    <label for="name">Name</label>
                    <input id="name" type="text" name="name" value="<?= (isset($name) ? htmlentities($name) : ''); ?>"/>
                    <span class="errors"><?= isset($errors['name']) ? $errors['name'] : '' ?></span>
                    <br><br>
                </div>
                <b>Commission</b><br>
                <div class="data-field">
                    <label for="commissie">chibi</label>
                    <input id="commissie" type="radio" name="commissie" value="chibi"/><br>
                    <label for="commissie">icon</label>
                    <input id="commissie" type="radio" name="commissie" value="icon"/><br>
                    <label for="commissie">simple colour</label>
                    <input id="commissie" type="radio" name="commissie" value="simple colour"/><br>
                    <label for="commissie">detailed colour</label>
                    <input id="commissie" type="radio" name="commissie" value="detailed colour"/><br>
                    <span class="errors"><?= isset($errors['commissie']) ? $errors['commissie'] : '' ?></span>
                    <br>
                </div>
                <div class="data-field">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email" value="<?= (isset($email) ? htmlentities($email) : ''); ?>"/>
                    <span class="errors"><?= isset($errors['email']) ? $errors['email'] : '' ?></span>
                </div>
                <div class="data-field">
                    <label for="beschrijving">Describe your commission</label><br>
                    <input id="beschrijving" type="text" name="beschrijving" value="<?= (isset($beschrijving) ? htmlentities($beschrijving) : ''); ?>"/>
                    <span class="errors"><?= isset($errors['beschrijving']) ? $errors['beschrijving'] : '' ?></span>
                </div>
                <div class="data-submit">
                    <input type="submit" name="submit" value="Save"/>
                </div>
            </form>
    </div>
    </div>

    <script src="js.js"></script>
    </body>






