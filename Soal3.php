<?php
function cetak($random){
	$i = 1;
	while ($i <=$random) {
			echo substr(str_shuffle(md5(microtime())), 0, 32);
			echo "<br/>";
			$i++;
	}
}
cetak(2);
?>
