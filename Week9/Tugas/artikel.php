<?php session_start(); ?>
<!DOCTYPE html>
  <head>
    <title></title>
  </head>

  <body>
    <?php
    if(isset($_GET['tambah'])){
      echo "pesan: tambah artikel ";
      echo $_GET['tambah'];
    }

    if(isset($_SESSION['status'])){
      include 'koneksi.php';
      include 'tampil_artikel.php';

      $konek = new koneksi();


      $username = $_SESSION['username'];
      $tipe = $_SESSION['tipe'];


      //tampil id_artikel
      $artikel = new tampil_artikel($konek-> koneksi, $username, $tipe);
      $artikel-> tampil();
    }
    ?>
  </body>
</html>
