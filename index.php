<!DOCTYPE html>
<html>
    <head>
        <title>Sauce Village</title>

        <script>
            
            function showAlert() {
                alert("You fucking imbecile! How could you not follow simple instructions?!?!");
            }

            function Hider(){
                var x = document.getElementById("div");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }

            function photo(){
                document.getElementById("img").src = "bestie.png";
            }

            function photo2(){
                document.getElementById("img").src = "dna.jpg"
            }

            function chgtext(elem){
                elem.innerHTML="woah";
            }

            function loadDoc() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("ajx").innerHTML = this.responseText;
                    }
                xhttp.open("GET", "ajx.txt", true);
                xhttp.send();
            }
        </script>

    </head>

    <body bgcolor="#CCCCFF">

        <center>

            <h1><FONT Color=#6495ED>Welcome to the Traphouse!</FONT></h1>
            <h2><FONT Color=#DC143C>Enjoy your stay and chill out!</FONT></h2>
            <div id="div">This is my little website that i created for class :D</div>
            <p id="demo">Here is a cool little picture of a dna strand!</p>
            <img id="img" src="dna.jpg"/><br/>
            <a href="second.html">Magic Portal!</a>
            
            <br/>
            <button onclick="showAlert()">Whatever you do, Don't Click this button</button>
            <br/>
            <button onclick="document.getElementById('demo').innerHTML = Date()">What time is it?</button>
            <button onclick="Hider()">Hide Something</button>
            <br/>
            <button onclick="photo()">See my bestie</button>
            <button onclick="photo2()">I dont want to see bestie anymore</button>
            <br/>
            <button onclick="chgtext(this)">Click to see woah</button>
        </center>
        <p>Here are some reasons as to why I should get 100% on this lab.</p>
        <p>This is your browser: <?= $_SERVER['HTTP_USER_AGENT'] ?></p>
        <ul>
            <li>I am a good student.</li>
            <li>Most importantly because of <a href="https://www.youtube.com/watch?v=astISOttCQ0"target="_blank">this</a></li>
        </ul>
        <button onclick="loadDoc()">ajax</button>
        <span id="ajx"></span>
    </body>
</html>