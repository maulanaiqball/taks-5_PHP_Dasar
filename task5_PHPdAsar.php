<?php
    function luasLingkaran($r) {
      $luas = 3.14 * $r * $r;
      return number_format($luas, 2);
    }

    function kelilingLingkaran($r) {
      $keliling = 2 * 3.14 * $r;
      return number_format($keliling, 2);
    }

    function luasPersegi($p, $l) {
      $luas = $p * $l;
      return number_format($luas, 2);
    }

    for ($i = 1; $i <= 100; $i++) {
      if ($i % 3 == 0 && $i % 5 == 0) {
        $panjang = $i / 3;
        $lebar = $i / 5;
        echo luasPersegi($panjang, $lebar) . "\n";
      } elseif ($i % 3 == 0) {
        $r = $i / 3;
        echo luasLingkaran($r) . "\n";
      } elseif ($i % 5 == 0) {
        $r = $i / 5;
        echo kelilingLingkaran($r) . "\n";
      } else {
        echo number_format($i, 2) . "\n";
      }
    }
?>
