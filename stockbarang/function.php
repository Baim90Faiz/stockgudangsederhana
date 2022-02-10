<?php

//membuat koneksi database byzifau 
$conn = mysqli_connect ("localhost","root","","stockbarang");


//membuat koneksi database
if(isset($_POST['addnewbarang'])){
$namabarang = $_POST['namabarang'];
$deskripsi = $_POST['deskripsi'];
$stock = $_POST['stock'];

$addtotable = mysqli_query($conn,"insert into stock (namabarang, deskripsi, stock) values('$namabarang','$deskripsi','$stock')");

}
?>