<?php
  class koneksi {
    public $connection;
    function __construct(){
      if (!isset($this->connection)) {
			$this->connection = new mysqli("localhost", "root","","test");
	  if (!$this->connection) {
			echo 'Tidak dapat terhubung ke server';
			exit;
		}
		}
	   return $this->connection;
    }
  }

 ?>
