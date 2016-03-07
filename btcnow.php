<?
$request = 'https://blockchain.info/ticker'; // Contins JSON file for BTC price info. Does not need Quandl API key.
$response = file_get_contents($request);
$decode = json_decode($response, true);
?>

<html>
  <head>
    <title>BTC NOW</title>
  </head>

  <body>
    <h1>BTC NOW</h1>
    <table style="width:100%">
      <tr>
        <td>Bid</td>
        <td><?php echo $decode['USD']['buy']; ?></td>
      </tr>
      <tr>
        <td>Ask</td>
        <td><?php echo $decode['USD']['sell']; ?></td>
      </tr>
  </body>
