<?php
$code = $_POST['code'];

if (strtoupper($code) == "BTC NOW")
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
