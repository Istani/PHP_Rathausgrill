<h1>Galerie</h1>
<br>
<?php
  $alledateien=scandir('content/galerie/bilder');
  foreach ($alledateien as $datei) {
    if (($datei!=".")&&($datei!="..")) {
      echo '<img src="content/galerie/bilder/'.$datei.'"><br><br>';
    }
  };
?>
