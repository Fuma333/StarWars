<!DOCTYPE html>
<!-- ak mam nejaku premennu a chcem ju pouzivat nizsie deklarujem ju uplne hore -->
<?php
    $page = $_GET['page']; 
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
                echo "O nás";
                break;
            default:
                echo "Domov";
            // ak je na konci url ?page=kontakt v title sa zobrazy text Kontakt
            // ak nie je v url ziadny parameter za ? zobrazi sa len text domov
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
    <!-- to co je tu medzi tagmi php tu sa zobrazi len ak je v url ?page=kontakt -->
    <div id="bubble">
        Ahoj Samo
        <button onclick="myFunction()">X</button>
    </div>
<?php } ?>
<div id="main">
    <header>
        sdsdsa sdadasd dsadsa 
        <h1 id="nadpis">Nadpis stranky</h1>
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
                // ak url obsahuje na konci ?page=kontakt vlozi obsah zo suboru kontakt.php
                break;
            case "onas":
                include "onas.php";
                break;
            default:
               include "hp.php";
               // ak nie je v url ziaden parameter vlozi sa html kod z hp.php
        }
    ?>
</div>

<script src="js/script.js">
</script>

</body>
</html>