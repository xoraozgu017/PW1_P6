<?php
    $total_pembelian = 300000;

    if ($total_pembelian < 75000) {
      $potongan = 0;
    } else if ($total_pembelian >= 75000 && $total_pembelian < 250000) {
      $potongan = $total_pembelian * 0.3;
    } else {
      $potongan = $total_pembelian * 0.42;
    }
    
    echo "Total Pembelian sebesar RP. ". $total_pembelian;
    echo "\nPotongan yang diterima adalah sebesar Rp. " . $potongan;
    echo "\nTotal Pembelian yang dibayarkan setelah mendapatkan Potongan sebesar Rp. ".  $total_pembelian - $potongan;
?>