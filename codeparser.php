<?php
$code = $_GET['code'];

if (strtoupper($code) == "BTCNOW")
{
  include 'btcnow.php';
}

if (strtoupper($code) == "STOCK")
{
  include 'stockParser.php';
}

else
{
  echo "<h1>Invalid code. Try again</h1>";
}
?>
