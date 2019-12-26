<?php
 Header ("Content-type: image/png");
 		// receving index from index.php file
	$Titular = $_POST['Titular'];
	$Poblecio=$_POST['Poblecio'];
	$NIF=$_POST['NIF'];
	$DataVenciment=$_POST['DataVenciment'];
	$Propietari=$_POST['Propietari'];
	$Fundacio=$_POST['Fundacio'];

	// getting the font information from the font resources
	$font = "C:\Windows\Fonts\arial.ttf";
    // according to the button clicks, process...
if (isset($_POST['first'])){
	
			// Create a image from source and add some text
		$im = imagecreatefrompng("images/1.png");
		$text_color = imagecolorallocate($im, 0, 0, 0);		
		imagettftext($im ,20 ,0,145,504, $text_color , $font , $Titular);
		imagettftext($im ,20 ,0,179,569, $text_color , $font , $Poblecio);
		imagettftext($im ,20 ,0,113,632, $text_color , $font , $NIF);
		imagettftext($im ,20 ,0,787,649, $text_color , $font , $DataVenciment);
		
			// Output the image		
		imagepng($im);
			// Free up memory
		imagedestroy($im);

} elseif (isset($_POST['second'])) {
	
		// Create a blank image and add some text
		$im = imagecreatefrompng("images/2.png");
		$text_color = imagecolorallocate($im, 0, 0, 0);		
		imagettftext($im ,20 ,0,145,504, $text_color , $font , $Titular);
		imagettftext($im ,20 ,0,179,569, $text_color , $font , $Poblecio);
		imagettftext($im ,20 ,0,113,632, $text_color , $font , $NIF);
		imagettftext($im ,20 ,0,787,649, $text_color , $font , $DataVenciment);
		
			// Output the image		
		imagepng($im);
			// Free up memory
		imagedestroy($im);


} elseif (isset($_POST['third'])) {
	$im = imagecreatefrompng("images/3.png");
		$text_color = imagecolorallocate($im, 0, 0, 0);		
		imagettftext($im ,20 ,0,173,502, $text_color , $font , $Fundacio);
		imagettftext($im ,20 ,0,115,567, $text_color , $font , $NIF);
		imagettftext($im ,20 ,0,175,635, $text_color , $font , $Propietari);
		imagettftext($im ,20 ,0,787,649, $text_color , $font , $DataVenciment);
		
			// Output the image		
		imagepng($im);
			// Free up memory
		imagedestroy($im);
}

?>