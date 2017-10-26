<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$host="localhost";
$user="root";
$password="";
$email=$_POST['email'];
$lengkap=$_POST['lengkap'];
$pengguna=$_POST['pengguna'];
$sandi=$_POST['sandi'];
echo "<tr><td>Email</td><td>:</td><td>$Email</td></tr>";
echo "<tr><td>Nama Lengkap</td><td>:</td><td>$Nama_Lengkap</td></tr>";
echo "<tr><td>Nama Pengguna</td><td>:</td><td>$Nama_Pengguna</td></tr>";
echo "<tr><td>Kata Sandi</td><td>:</td><td>$Kata_Sandi</td></tr>";
echo "<tr><td colspan=3><hr>";
echo "</table><hr>";
{
$conn=mysql_connect($host,$user,$password);
mysql_select_db("dbinstagram");
$sql="insert into tsiswa values('$email,'$lengkap','$pengguna','$sandi') ";
$hasil=mysql_query($sql,$conn); echo"Data berhasil di simpan";
}
?>
</body>
</html>
