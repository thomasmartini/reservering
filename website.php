<link rel="stylesheet" href="style.css">
<div class="header">
home
</div>
<body>
<div id="container">
    <div id="background">
        <img class="slide fade" src="img1.png" style="width:100%" height="100%">
        <img class="slide fade" src="img2.png" style="width:100%" height="100%">
        <img class="slide fade" src="img1.png" style="width:100%" height="100%">
        <img class="slide fade" src="img2.png" style="width:100%" height="100%">
    </div>
    <section>
        <img id="art" src="img2.png" width="500px" height="400px">
        <b>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                .dropbtn {
                    background-color: #969797;
                    color: white;
                    padding: 16px;
                    font-size: 16px;
                    border: none;
                    cursor: pointer;
                    position: static;
                }

                .dropbtn:hover, .dropbtn:focus {
                    background-color: #2980B9;
                }

                .dropdown {
                    position: absolute;
                    display: inline-block;
                }

                .dropdown-content {
                    display: none;
                    position: absolute;
                    background-color: #f1f1f1;
                    min-width: 160px;
                    overflow: auto;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index: 1;
                }

                .dropdown-content a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                }

                .dropdown a:hover {background-color: #ddd;}

                .show {display: block;}
            </style>

        </head>

        </b>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Commission list</button>
            <div id="myDropdown" class="dropdown-content">
                <a onclick="document.getElementById('commissions').innerHTML='<h2><b>Chibis = €10 /100k Bells /100k WoW gold</b></h2> <b><h3>Info:</h3></b><br> Your character in a cute Chibi art style. These are always coloured and full body.'; document.getElementById('art').src='img1.png'">Chibis</a>
                <a onclick="document.getElementById('commissions').innerHTML='<h2><b>Icons= €5</b></h2> <b><h3>Info:</b></h3>A headshot of your character. Easy to use for icons, and profile pictures. Will draw this in 1000x1000, which I can downscale to other sizes if you want to.' ; document.getElementById('art').src='img2.png'">Icons</a>
                <a onclick="document.getElementById('commissions').innerHTML='  <b><h2>Easy Coloured = €20</h2><h3>+ Extra character = €15<br><br>Info:</h3><br></b>A full body drawing, clean lined, coloured with a small bit of simple shading. I will not do complex backgrounds/scenery, only do simple backgrounds.\n' ; document.getElementById('art').src='img1.png'">Easy Coloured</a>
                <a onclick="document.getElementById('commissions').innerHTML='        <h2><b>Detailed Coloured = €25</h2><h3>+ First extra character = €15<br>+ Extra characters = €20<br>+ Scenery = €30<br><br>Info:</b></h3><br>Detailed full body drawing of your character, with clean line art, complex shading and lighting. Usually with a simple background, but can be done with a complex scenery and extra characters.\n' ; document.getElementById('art').src='img2.png'">Detailed coloured</a>
            </div>

        </div>
        <div id = "commissions">
            Chibis = €10 /100k Bells /100k WoW gold</b></h2> <b><h3>Info:</h3></b><br> Your character in a cute Chibi art style. These are always coloured and full body.
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

</div>
</body>


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


