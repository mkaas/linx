<?php

	function htmlHeader($title=null,$version=null,$release=null,$theme=null){
		if ($theme==null){
			$theme = 'default';
		}
		print '
			<html>
				<head>
					<title>'.$title.' - '.$version.'('.$release.')</title>
					<link rel="stylesheet" type="text/css" href="css/'.$theme.'.css" />
				</head>
				<body>
					<center>
		';
	}

	function htmlFooter(){
		print '
					</center>
				</body>
			</html>
		';
	}
	
?>
