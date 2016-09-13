<?php
$NameCvs = "PATH";
$row = 0;
if (($handle = fopen($NameCvs , "r")) !== FALSE) {
	$itepage= array();
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        for ($c=0; $c < $num; $c++) {
        	
            // In this section, insert your code
			
        }
    }
    
   

    fclose($handle);
}
?>