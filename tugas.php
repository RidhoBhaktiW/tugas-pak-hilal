<html>
<head>
  <title>DAFTAR A</title>
<style>
p.bgclr{border-width:solid;border-bottom:solid;text-decoration-color:white;border-width:50%;}
</style>
</head>
<body>
<h1>DAFTAR A</h1>
<form>
<table border="1" cellpadding="4" cellspacing="0">
<tr>
<td><?php echo "Nama Lengkap : "; ?></td>
<td><input type="text" size="20"></td>
</tr>
<tr>
<td><?php echo "User : "; ?></td>
<td><input type="text" size="20"></td>
</tr>
<tr>
<td><?php echo "Password : "; ?></td>
<td><input type="password"></td>
</tr>
<tr>
<td><?php echo "Confirm Password : "; ?></td>
<td><input type="password"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="submit">
<input type="reset" value="reset"></td>
</tr>
</table>
</form>


<?php
echo "<ul type = circle>
<li>Membuat sambungan Database</li>
<li>Memilih Database</li>
<li>Membuat query</li>
<li>Menjalankan query</li>
<li>Mengambil Hasilnya</li>
<li>Memproses Hasilnya</li>";
?>

<p>Query yang akan digunakan adalah : </p>
<p class="bgclr">Select * From Usertable Where UserName : 'input dari user'</p>

<p>query ini akan dimasukkan kedalam script menjadi :</p>
<p class="bgclr">$query = Select * FROM Usertable WHERE UserName = '$Login'</p>

<p>Dan dieksekusi dengan kode : </p>
<p class="bgclr">$Hasil=mysql_query($query);</p>

</body>
</html>
