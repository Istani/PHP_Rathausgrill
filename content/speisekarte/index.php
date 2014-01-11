<h1>Speisekarte</h1>

<table width="100%" class="speisekarte">
  <?php
    $tmp_art_alt="";
    $fh=fopen("content/speisekarte/datenbank.txt", "r");
    while (($data=fgetcsv($fh, 1000, ";"))!==false) {
      if ($data[0]!=$tmp_art_alt) {
        echo '<tr><td colspan="3"><h2>'.$data[0].'</h2></td></tr>';
        $tmp_art_alt=$data[0];
      }
      echo '<tr class="speise"><td width="100%">'.$data[1].'</td><td>';
      if ($data[4]==1) {
        echo 'Handgemacht&nbsp;&nbsp;';
      }
      echo '</td><td>'.$data[3].'&nbsp;Euro</td></tr>';
      if ($data[2]!="") {
        echo '<tr><td colspan="2"><i>'.$data[2].'</i></td><td></td></tr>';
      }
    }
  ?>
</table>
