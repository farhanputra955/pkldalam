<?php
$folder = "Pictures"; //folder tempat gambar disimpan
$handle = opendir($folder);
echo '<table cellspacing="2" cellpadding="5">';
echo '<tr>';
$i = 1;
while(false !== ($file = readdir($handle))){
	if($file != '.' && $file != '..'){
		echo '<td style="border:1px solid #000000;" align="center">
			<img src="Pictures/Download.jpg'.$file.'" width="100" /><br />
			'.$file.'
		</td>';
		if(($i % 4) == 0){
			echo '</tr><tr>';
		}
		$i++;
	}
}
echo '</tr>';
echo '</table>';
?>