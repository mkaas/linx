<?php

	/* LinX 2012 */
	
	include_once('includes/functions.inc.php');
	htmlHeader('LinX','2012','micromalist');
	
	$rows=2000;
	$cols=40;
	$space_width=50;
	
	print '<table border="1" cellspacing="0" cellpadding="0">';
	for($i=1;$i<=$rows;$i++){
		print '<tr>';
		for($n=1;$n<=$cols;$n++){
			print '<td style="width:'.$space_width.'px" class="link">'.$i.':'.$n.'</td>';
		}
		print '</tr>';
	}
	print '</table>';
	
	htmlFooter();

?>
