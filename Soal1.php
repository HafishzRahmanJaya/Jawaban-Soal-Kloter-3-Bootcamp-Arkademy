<?php
$data =  array(
		"name"				=> "Hafishz Rahman Jaya ",
		"address"			=> "Padang Pariaman ",
		"hobbies"			=> ["berenang" , "sepak bola" ],
		"is_married"		=> "false",
		"school"			=> array( 
                            			"highSchool" => "SMKN 2 Padang Panjang" ,
								        "university" => " " ),

		"skills"			=> array(
										"Web Development",
										"Rekayasa Perangkat lunak" )
		);
		
	function formatJson($data){
		return json_encode(	$data);
	}
	echo formatJson($data);
?>
