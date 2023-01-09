<?php
  // function to create QR code image from a link
  function createQR($link) {
    // get QR code image using Google Chart API
    $qrUrl = "https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=" . urlencode($link);
  
    // return the QR code image
    return $qrUrl;
  }

  if (isset($_GET['link'])) {
    $link = $_GET['link'];
    $qrCode = createQR($link);
    echo "<img src='$qrCode'>";
  }
?>
