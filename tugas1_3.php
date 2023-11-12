<?php
    $total_pembelian = 50000;

    switch (true) {
      case ($total_pembelian < 75000):
        $potongan = 0;
        echo "Terima Kasih Sudah Belanja di Toko Kami";
        break;
      case ($total_pembelian >= 75000 && $total_pembelian < 250000):
        $potongan = $total_pembelian * 0.3;
        echo "\nSelamat Anda mendapatkan Potongan sebesar Rp. ". $potongan;
        echo "\nTotal Pembelian Anda sebesar Rp. ". $total_pembelian - $potongan;
        break;
      case ($total_pembelian >= 250000):
        $potongan = $total_pembelian * 0.42;
        echo "\nSelamat Anda mendapatkan Potongan sebesar Rp. ". $potongan;
        echo "\nTotal Pembelian Anda sebesar Rp. ". $total_pembelian - $potongan;
        break;
    }
?>