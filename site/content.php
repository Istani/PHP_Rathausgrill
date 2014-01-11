<?php
  if (!isset($_GET['seite'])) {
    $_GET['seite']="start";
  }
?>

<table class="aufbau" width="100%">
  <tr>
    <td colspan="2">
      <img src="image/banner.png">
    </td>
  </tr>
  <tr>
    <td class="navigation"><?php
        include("navigation.php");
      ?>
    </td>
    <td class="content"><?php
        include("content/index.php");
      ?></td>
  </tr>
  <tr class="footer" height="100">
    <td class="footer" colspan="2" height="100">
      <p class="footer_impressum">
        <a href="index.php?seite=impressum">Impressum</a><br>
      </p>
      <p class="footer_text">
        Alexander Amling & Sascha Kaufmann
      </p>
    </td>
  </tr>
</table>