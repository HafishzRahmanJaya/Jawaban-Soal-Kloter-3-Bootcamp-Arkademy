<?php
 function ValidasiUsername($user){
 	    $UserValid = preg_match("/^[a-z || .]*$/", $user);
 	        if ($UserValid && strlen($user)==8) {
 		            echo "true <br/>";
 	        }else{
 		            echo "false <br/>";
 	        }
       }
  function ValidasiEmail($email){
 	    $EmailValid = preg_match("/^[a-z || A-Z || 0-9 || @.]*$/", $email);
 	        if ($EmailValid && strlen($email)>=4) {
 		            echo "true <br/>";
 	        }else{
 		            echo "false <br/>";
 	        }
       }
  ValidasiUsername("hafisjay");
  ValidasiEmail("hafishzrahman@jaya.com");
?>
