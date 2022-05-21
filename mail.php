<?php

$firstname = $_post["firstname"];
$lastname = $_post["lastname"];

$subject = $_post["subject"];

$mailheader = "from:".$firstname. "<" .$lastname. ">\r\n";


$recipient = "saracavina20@gmail.com";

mail($recipient,$subject,$mailheader) or die("error!");

echo '
<!doctype html>
<html>
 <head>
  <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  
  <script src="https://kit.fontawesome.com/375c06dd51.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">  

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
   <title>Send us your playlist</title>
 </head>
 <body class="container-fluid">
  <header style="background-image: url(images/blurhomeimg.jpg)">
    <h1 id="titlestyle"> PLAYLISTS FOR MOODS <i id="homeicon" class="fa-solid fa-circle-play"></i> </h1>
    <h2 id="subtitlestyle" class="borderbox2">physically, you're here. but mentally, you're there.</h2>
      <nav>
       <ul>
           <li><a class="whitelink" href="index.html">homepage</a></li>
           
              <div class="dropdown">
                <p class="dropbtn">ALL PLAYLISTS </p>
                <div class="dropdown-content">
                 <a href="beachbaby.html">BEACH BABY</a>
                 <a href="mindfulness.html">MINDFUL VIBES</a>
                 <a href="treno.html">ON A TRAIN AND IT'S RAINING</a>
                 <a href="woods.html">MOUNTAIN WOODS</a>
                </div>
              </div>
            </li>
               <li><a class="whitelink" href="about.html">about/contact us</a></li>
               <li class="active"><a class="whitelink" href="#">send us your playlist</a></li>
       </ul>
    </nav>
  </header>
  <main>
    <section>
      <h2 id="font2" style="text-align:center; padding:1em">Thank you for submitting your playlist, we will get back to you as soon as possible!</h2>
      <p id="font2" class="back"><i>Go back to the <a href="contactus.html">contact form</a><i></p>
    </section>
   
    </main>
     <footer>
      <nav>
        <ul>
          <li><a id="footericon" href="documentazione.html"><i class="fa-solid fa-file-lines"></i></a></li> 
        </ul>
      </nav>
    </footer>
 </body>
</html>

';

?>