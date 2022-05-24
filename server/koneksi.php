<?php 
	include_once("konfigurasi.php");
	$cnn = mysql_connect(HOST,USER,PWD,DBNAME)or die("tidak bisa koneksi ke database");