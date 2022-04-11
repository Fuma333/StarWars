<!DOCTYPE html>

<?php
$page = $_GET['page']; 
echo $page;
?>


<html lang="sk">
   <head>
      <title>
      <?php
         switch ($page) {
               case "kontakt":
                   echo "Kontakt";
                   break;
               case "onas":
                  echo "o nás";
                  break;
               default:
                  echo "Domov";
           }
      ?> 
      </title>
      <meta charset="UTF-8">
      <meta name="description" content="Free Web tutorials">
      <meta name="keywords" content="HTML, CSS, JavaScript">
      <meta name="author" content="John Doe">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/style.css?10:43">
     
   </head>
   <body>
   <?php if($page == "kontakt") { ?>
      <div id="buble">
         Darth Vader
         <button onclick="myFunction()">X</button>
      </div>
      <?php } ?>
      <div id="main">
         <header>
            <h1 id="nadpis">Nadpis stránky</h1>
            <ul>
               <li><a href="/">Home</a></li>
               <li><a href="?page=kontakt">Kontakt</a></li>
               <li><a href="?page=onas">O nas</a></li>
            </ul>
         </header>
         <?php
            switch ($page) {
               case "kontakt":
                   include "kontakt.php";
                   break;
               case "onas":
                  include "onas.php";
                  break;
               default:
                  include "hp.php";
           }
         ?>
      </div>
      

      <script src="js/script.js">
      </script>
   </body>
</html>