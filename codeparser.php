<?php
$code = $_GET['code'];

if (strcmp(strtoupper($code), "BTCNOW") == 0)
{
  include 'btcnow.php';
}

if (strcmp(strtoupper($code), "STOCK") == 0)
{
  include 'stockParser.php';
}

else
{
  echo "<h1>Invalid code. Try again</h1>";
}
?>
