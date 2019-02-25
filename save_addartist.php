<?php


require("core/boostrap.php");
require("templates/header.php");

$ArtistController = new \App\Controllers\ArtistController();
$res = $artistController->createArtist($_POST['name'], $_POST['email'], $_POST['phone']);
?>

<?php
    if($res) {
        ?>
            <h1>Artist lagt till! 🕺🏻</h1>
    <?php            
    } else {

    ?>
                <h1>Oooops, något gick fel 😅</h1>
    <?php 
    }
    ?>
<a href="index.php">&laquo; Tillbaka</a>

<?php
require("templates/footer.php");