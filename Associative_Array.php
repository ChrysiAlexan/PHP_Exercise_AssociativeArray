<html>

<head></head>
<body>
	<?php 
	$associativeArray = ["PHP"=>"10","C++"=>"9","3ds MAX"=>"4","Unity"=>"7","Unreal5"=>"8"];
	$bol=false;
	$max=0;
	$min=10;

	foreach ($associativeArray as $x => $x_value) {
		echo $x." : ".$x_value."<br>";	 
	}

	echo "<br> Subjects You Failed <br>";

	foreach ($associativeArray as $x => $x_value) {
		if($x_value<=5){
			echo $x." : ".$x_value."<br>";	
			$bol=true;
		}
		if($max<$x_value){
			$max=$x_value;
		}
		if($min>$x_value){
			$min=$x_value;
		}	
	}
	if($bol==false){
		echo "You passed them all!";
	}

	echo "<br> Your Highest grade was: $max";
	echo "<br> Your Lowest grade was: $min";


	


	?>
</body>

</html>