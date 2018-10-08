<?php
$nim="0411500400";
$nama="Ridho Bhakti Wicaksono";
$umur="16";
$nilai="82.25";
$status="TRUE";
echo "NIM : ".$nim."<br>";
echo "Nama : $nama<br>";
print "Umur : ".$umur;print"<br>";
printf("Nilai : %.3f<br>",$nilai);
if($status)
echo "Status : Aktif";
else
echo "Status : Tidak Aktif";
?>
<?php
echo "<p>";
$a=10;
$b=5;
$c=6;
$d=11;
$e=13;
$f=4;
$g=12;
$h=3;
echo "10 ~ 5 ~ ", $a + $b /2, "<br>";
echo "10 ~ 6 ~ ", ($a + $c - 9) /2, "<br>";
echo "10 ~ 6 ~ ", ($a + $c - 9) /2, "~", ($c - ($a + $c - 9) /2 ) * 2 *$a, "<br>";
echo "11 ~ 6 ~ ", ($d + $c) /-2 +2, "~" , (($d + $c) /-2 +2) * -2 - 7 + 100, "<br>" ;
echo "11 ~ 5 ~ ", ($d + $b) * -1 + 5.5 , "<br>";
echo "13 ~ 4 ~ ", ($e - $f) * -1 + 2.5, "<br>";
echo "13 ~ 4 ~ ", ($e - $f) * -1 + 3.44, "<br>";
echo "12 ~ 3 ~ ", ($g - $h) * -1 + 3.44, "<br>";
echo "11 ~ 4 ~ ", ($d - $f) * -1 + 1.5, " ~ " ,($d - $f) - 1.5 + 0.5;
?>
