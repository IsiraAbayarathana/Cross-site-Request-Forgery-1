<?php



class token {

	public static function checkToken($token,$sessionIdentifier){


echo "<script>alert('$sessionIdentifier');</script>";

		$myfile = fopen("Tokens.txt", "r") or die("Unable to open file!");
		list($tok,$sid) = explode(",",chop(fgets($myfile)),2); // chop() is a must because fgets() returns new line character
		fclose($myfile);
		if($tok == $token){
			if($sessionIdentifier == $sid ){
		return true;
			}
		}

	}




}

$val = $_POST["token"];


if(isset($_POST['updatepost'])){
	if(token::checkToken($val,$_COOKIE['sse1'])){
		echo "hello ".$_POST['updatepost'];
	}
	else{
	echo "wrong".$_COOKIE['sse1'];
	}
}
?>
