<link rel="stylesheet" href="style.css">
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
    <section>
        <img id="art" src="chibi.png" width="500px" height="400px">

        <div class="dropdown">
            <form action="http://localhost/reservering/persooninfo.php">
                <input type="submit" value="Confirm Commission" class="dropbtn" />
            </form>
            <button onclick="myFunction()" class="dropbtn">Commission list</button>
            <div id="myDropdown" class="dropdown-content">
                <a onclick="document.getElementById('commissions').innerHTML='<h2><b>Chibis = €10 /100k Bells /100k WoW gold</b></h2> <b><h3>Info:</h3></b><br> Your character in a cute Chibi art style. These are always coloured and full body.'; document.getElementById('art').src='chibi.png'">Chibis</a>
                <a onclick="document.getElementById('commissions').innerHTML='<h2><b>Icons= €5</b></h2> <b><h3>Info:</b></h3>A headshot of your character. Easy to use for icons, and profile pictures. Will draw this in 1000x1000, which I can downscale to other sizes if you want to.' ; document.getElementById('art').src='icon.png'">Icons</a>
                <a onclick="document.getElementById('commissions').innerHTML='  <b><h2>Easy Coloured = €20</h2><h3>+ Extra character = €15<br><br>Info:</h3><br></b>A full body drawing, clean lined, coloured with a small bit of simple shading. I will not do complex backgrounds/scenery, only do simple backgrounds.\n' ; document.getElementById('art').src='easy colour.png'">Easy Coloured</a>
                <a onclick="document.getElementById('commissions').innerHTML='        <h2><b>Detailed Coloured = €25</h2><h3>+ First extra character = €15<br>+ Extra characters = €20<br>+ Scenery = €30<br><br>Info:</b></h3><br>Detailed full body drawing of your character, with clean line art, complex shading and lighting. Usually with a simple background, but can be done with a complex scenery and extra characters.\n' ; document.getElementById('art').src='bckgrnd2.png'">Detailed coloured</a>
            </div>

        </div>
        <div id = "commissions">
            <h2><b>Chibis = €10 /100k Bells /100k WoW gold</b></h2> <b><h3>Info:</h3></b><br> Your character in a cute Chibi art style. These are always coloured and full body.
        </div>

        <script>

            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>

        </body>

    </section>
</div>


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


