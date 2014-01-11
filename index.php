<?php
  ob_start();
  include("site/config.php");
  include("site/header.php");
  include("site/content.php");
  include("site/footer.php");
  $page_ausdgabe=ob_get_contents();
  ob_end_clean();
  echo utf8_decode($page_ausdgabe);
?>