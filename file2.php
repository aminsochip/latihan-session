<?php
session_start();
echo 'Halo '.$_SESSION['nama'].' selamat datang :D di halaman dua';
echo '<a href="file3.php">ke halaman tiga</a>';
?>
