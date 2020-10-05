<?php 
	$nama = $_POST['nama'];
	if($nama==""){
		header("location:form.php?nama=kosong");
	}else{
		echo "Nama anda adalah ".$nama;
	}
?>