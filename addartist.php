<?php

// Starta upp appen (ladda in alla nödvändiga klasser och eventuellt skapa anslutningar)
require("core/boostrap.php");

// Inkludera en gemensam header-template (som alla sidor i denna apen inkluderar)
require("templates/header.php");

/**
 * Hämta ut alla gäster och loopa över dem
 * För varje gäst skriv ut gästens namn och ha en länk till en enskilds gästs sida
 * Länk för att anmälla sig till festen
 */
?>



<h2>Lägg till artist</h2>



<form action="save_addartist.php" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Ange artistens namn">
    </div>

    <!-- <div class="form-group">
        <label for="email">E-post</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Ange din e-post-adress">
    </div>

    <div class="form-group">
        <label for="fullname">Telefonnummer</label>
        <input name="phone" type="tel" class="form-control" id="phone" placeholder="Ange ditt telefonnummer">
    </div> -->

    <button type="submit" class="btn btn-primary">Add</button>
</form>

<?php
// Inkuldera en gemensam footer-template (som alla sidor i denna appen inkulderar)
require("templates/footer.php");

