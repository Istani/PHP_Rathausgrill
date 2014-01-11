<?php
  if (!isset($_GET['seite'])) {
    $_GET['seite']="start";
  }

  $tmp_seite="content/".$_GET['seite']."/index.php";
  if (file_exists($tmp_seite)) {
    include($tmp_seite);
  } else {
    $_GET['seite']="start";
    $tmp_seite="content/".$_GET['seite']."/index.php";
    include($tmp_seite);
  }
?>