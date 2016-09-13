<?php
$pathCvs = "PATH CVS";
$row = 0;
if (($handle = fopen($pathCvs , "r")) !== FALSE) {
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