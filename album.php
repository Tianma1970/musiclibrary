<?php
 // Starta upp appen (ladda in alla nödvändiga klasser och evenuellt skapa anslutningar)
require("core/boostrap.php");
// Inkludera en gemensam header-template (som alla sidor i denna appen inkluderar)
require("templates/header.php");
/**
 * - Hämta ut info om albumet och alla albumets låtar
 * - För varje låt, skriv ut låtens namn och längd
 * - (Länk för att skapa en ny låt för det här albumet)
*/
use App\Models\Album;
use App\Models\Artist;
use App\Models\Track;


$album = Album::find($_REQUEST['album_id']);

$tracks = Track::where('album_id', $_REQUEST['album_id'])->get();

?>
<h1>Artister</h1>
<ol>
<?php
foreach ($tracks as $track) {
    ?>
    <li>
    <a href="album.php?album_id=<?php echo $track->id; ?>">
						<?php echo $track->name; ?></a>
    </li>
<?php   
}
?>
</ol>

<?php
require("templates/footer.php");