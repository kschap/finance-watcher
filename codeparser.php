<?php
$code = $_POST['code'];

if (strtoupper($code) == "BTC NOW") {
  $request = 'https://blockchain.info/ticker';
  $response = file_get_contents($request);
  $decode = json_decode($response, true);

  $price = $decode['USD'][]
  echo "<html><head><title>BTC NOW</title></head><body>";
  echo "<h1>" . $code . "</h1></br>";
  echo "<h2>Bid: " . $decode['USD']['buy'] . "</h2></br>";
  echo "<h2>Ask: " . $decode['USD']['sell'] . "</h2></br></body></html>";
}
?>
