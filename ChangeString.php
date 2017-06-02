<?php

class ChangeString
	{	 

// PROBLEMA 1
		function build($subject)
		{ 

		$search  = array('A', 'B', 'C', 'D', 'E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ','o', 'p', 'q', 'r','s', 't', 'u', 'v', 'w', 'x', 'y', 'z');
		$replace = array( 'B', 'C', 'D', 'E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z','A', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ','o', 'p', 'q', 'r',
		's', 't', 'u', 'v', 'w', 'x', 'y', 'z','a');
		$letras2 = "";
		$letras3 = "";
			for ($i=0; $i <strlen($subject) ; $i++) { 
			 
				 $letras = substr($subject, -(strlen($subject)-$i), 1);
				if(in_array($letras, $search ))
				{ 
						for ($a=0; $a < count($search); $a++) { 
				 			if ($letras == $search[$a]) {
								$letras2 =str_replace($search[$a], $replace[$a], $letras);
								$letras3.= $letras2;
							} 
				   		 }	

				}else {
						$letras3.= $letras;
				}	 
			}

			return $input =$letras3;
 
			}
		}	
	 		$changeString = new ChangeString;	
			echo $changeString->build("123 abcd*3");
			echo '<br>';
			echo $changeString->build("**Casa 52");
			echo '<br>';
			echo $changeString->build("**Casa 52Z");


?>