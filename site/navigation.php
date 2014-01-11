<table class="navigation_bar" cellspacing="10">
  <tr>
    <td>
      <a href="index.php">
        <?php
          $erw="";
          if ($_GET['seite']=="start") {
            $erw="_";
          }
          echo '<img class="btn_start" src="image/btn_start'.$erw.'.png">';
        ?>
      </a>
    </td>
  </tr>

  <tr>
    <td>
      <a href="index.php?seite=geschichte">
        <?php
          $erw="";
          if ($_GET['seite']=="geschichte") {
            $erw="_";
          }
          echo '<img class="btn_geschichte" src="image/btn_geschichte'.$erw.'.png">';
        ?>
      </a>
    </td>
  </tr>

  <tr>
    <td>
      <a href="index.php?seite=speisekarte"><?php
          $erw="";
          if ($_GET['seite']=="speisekarte") {
            $erw="_";
          }
          echo '<img class="btn_speisekarte" src="image/btn_speisekarte'.$erw.'.png">';
        ?></a>
    </td>
  </tr>

  <tr>
    <td>
      <a href="index.php?seite=galerie"><?php
          $erw="";
          if ($_GET['seite']=="galerie") {
            $erw="_";
          }
          echo '<img class="btn_galerie" src="image/btn_galerie'.$erw.'.png">';
        ?></a>
    </td>
  </tr>

  <tr>
    <td>
      <a href="index.php?seite=anfahrt"><?php
          $erw="";
          if ($_GET['seite']=="anfahrt") {
            $erw="_";
          }
          echo '<img class="btn_anfahrt" src="image/btn_anfahrt'.$erw.'.png">';
        ?></a>
    </td>
  </tr>
</table>