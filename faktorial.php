<?php 
	function faktor($angka){
		if( $angka == 1){
          $hasil = 1;
	      return $hasil; 
        } else if($angka > 1){
  	      for($i=1; $i<=$angka; $i++){
           		$hasil = $angka * faktor($angka-1);
        	}
         return $hasil;
        }
	}
	echo faktor(3);
?>