<?php
$code = $_GET['code'];

if (strcmp($code, "BTCNOW"))
{
  include 'btcnow.php';
}

if (strcmp($code, "STOCK"))
{
  include 'stockParser.php';
}

else
{
  echo "<h1>Invalid code. Try again</h1>";
}
?>
