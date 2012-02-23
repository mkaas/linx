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
	
	function keygen(){
		$rows=65;
		$cols=40;
		$space_width=50;

		for($t=0;$t<=22;$t++){
			$x1=rand(1,$rows);
			$x2=rand(1,$cols);

			$x3=rand(1,$rows);
			$x4=rand(1,$cols);

			$key1=''.$x1.':'.$x2.'';
			$key2=''.$x3.':'.$x4.'';

			for($d=0;$d<=40;$d++){
				$c = rand(10000,99999);
				$e = rand(10000,99999);
				$f = rand(10000,99999);
				$g = $c * $f / $e / $d * $c;
				$salt=''.$salt.''.$g.'';
			}
			//echo '<br />' . $salt . '<br />';
			//print '<table border="0" cellspacing="0" cellpadding="0">';
			for($i=1;$i<=$rows;$i++){
				//print '<tr>';
				for($n=1;$n<=$cols;$n++){
					$code=''.$i.':'.$n.'';
					if($code==$key1){
						//print '<td style="width:'.$space_width.'px" class="color-test-red"><a href="'.$i.'-'.$n.'.php">'.$i.':'.$n.'</a></td>';
					} else if($code==$key2) {
						//print '<td style="width:'.$space_width.'px" class="color-test-blue"><a href="'.$i.'-'.$n.'.php">'.$i.':'.$n.'</a></td>';
					} else {
						//print '<td style="width:'.$space_width.'px" class="color-test"><a href="'.$i.'-'.$n.'.php">'.$i.':'.$n.'</a></td>';
					}
				}
				//print '</tr>';
			}
			//print '</table>';

			$code = ''.$key1.''.$key2.'' . md5(rand(1000,9999));
			$code2 = explode(':', $code);
			$cur_key=''.$code2[2].''.$code2[0].''.$code2[3].'';

			$real = sha1($salt);
			
			$salt1 = ''.$cur_key.'' . $real . sha1($cur_key);
			$salt2 = ''.$salt2.'' + ''.$salt1.'';
		}
		$cryptkey = mcrypt_ecb(MCRYPT_3DES, $salt2, $salt1, MCRYPT_ENCRYPT);
		/* TODO: ADD INSERT INTO TO DB */
	}
	
?>
