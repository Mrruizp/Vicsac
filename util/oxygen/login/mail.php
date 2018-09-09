<?php
				$destino =$_POST['email'];
				$asunto ="comentario";
				
				$comentario="
					Email:$_POST[email]
					Comentario:$_POST[com]
				";
	
				$headers = 'From: '.$destino."\r\n".
				'Reply-To:'.$destino."\r\n".
				'X-Mailer: PHP/'.phpversion();
?>
