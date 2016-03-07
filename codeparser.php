<?php
$code = $_GET['code'];

if (strcmp(strtoupper($code), "BTCNOW"))
{
  include 'btcnow.php';
}

if (strcmp(strtoupper($code), "STOCK"))
{
  include 'stockParser.php';
}

else
{
  echo "<h1>Invalid code. Try again</h1>";
}
?>
