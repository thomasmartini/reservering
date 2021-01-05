<link rel="stylesheet" href="style.css">

<div class = "header">
    Commission
</div>

    <div id="container">
        <div id="background">
            <img class="slide fade" src="bckgrnd1.png" style="width:100%" height="100%">
            <img class="slide fade" src="bckgrnd2.png" style="width:100%" height="100%">
            <img class="slide fade" src="bckgrnd3.png" style="width:100%" height="100%">
            <img class="slide fade" src="bckgrn4.png" style="width:100%" height="100%">
        </div>
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

    <form action="http://localhost/reservering/website.php">
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle1"> I accept the Terms of Service</label><br><br>
        <input type="submit" value="Submit" class="btn">
    </form>
</section>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("slide");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 9000);
    }

</script>


