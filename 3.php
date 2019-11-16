<?php
$teks = "mari belajar coding dan php";
$kata = explode(" ", $teks);
$hasil= count($kata);

echo "Teks: $teks <hr>";
print_r($kata);
echo "<hr>";
echo "Jumlah Kata: $hasil buah kata";
?>