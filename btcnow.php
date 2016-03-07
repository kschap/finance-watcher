<?
$request = 'https://blockchain.info/ticker'; // Contins JSON file for BTC price info. Does not need Quandl API key.
$response = file_get_contents($request);
$decode = json_decode($response, true);
$bid = $decode['USD']['buy'];
$ask $decode['USD']['sell'];
echo
"<html>
  <head>
    <title>BTC NOW</title>
  </head>

  <body>
    <h1>BTC NOW</h1>
    <table style=\"width:100%\">
      <tr>
        <td>Bid</td>
        <td>$bid</td>
      </tr>
      <tr>
        <td>Ask</td>
        <td>$ask</td>
      </tr>
  </body>
  ";
