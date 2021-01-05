
<link rel="stylesheet" href="persoonfile.css">

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
        <form>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value=""><br>
            <br>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email">


            <br>
            <br>
            <label for="timeslot">Timeslot</label>
            <input type="date" id="timeslot" name="timeslot">
            <br>
            <br>
            <label for="description">Describe your commission</label><br>
            <input type="text" id="description" name="description_input"><br>
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



