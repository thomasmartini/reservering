<?php

/** @var mysqli $db */
require_once "back_end.php";


//Retrieve the GET parameter from the 'Super global'
$klanten = $_GET['id'];
if (isset($_POST['submit'])) {

//Remove from the database
    $query = "DELETE FROM klanten WHERE id = " . mysqli_escape_string($db, $klanten);

    mysqli_query($db, $query) or die ('Error: ' . mysqli_error($db));

//Close connection
    mysqli_close($db);

//Redirect to admin page after deletion & exit script
    header("Location: admin.php");
    exit;
}
if(isset($_POST['no'])){
    header("Location: admin.php");
    exit;
}
?>
<form action="" method="post" enctype="multipart/form-data">
<div class="data-submit">
    <label>Are you sure you want to delete this commission?</label>
    <input type="submit" name="submit" value="yes"/>
    <input type="submit" name="no" value="no"/>
</div>

</form>
