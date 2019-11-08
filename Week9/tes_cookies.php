<?php setcookie("test_cookie", "test", time() + 3600, '/'); ?>
<html>
<body>
<?php 
	if(count($_COOKIE) > 0) {
		echo "Cookies enabled.";
	} else {
		echo "Cookies disabled.";
	} 
?>
 <br><br>
1. Membuat Cookie dengan nilai test dengan waktu 60 menit <br>
2. Ketika Cookie habis maka masuk ke percabangan else <br>
3. Untuk Mode Incognito, Cookie tidak dapat di set. Hal ini terjadi karena Incognito Mode tidak akan menyimpan cache,cookies 
dan history dari website yang kita akses. 

</body>
</html>