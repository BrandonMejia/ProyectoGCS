<?php
	$conexion=mysqli_connect('localhost','root','Shadowmast@1','peru');
	$Provincia=$_POST['Provincia'];
		$sql2="SELECT IdProvincia,Distrito,IdDistrito
		FROM distrito
		WHERE IdProvincia='$Provincia'";
	$result2=mysqli_query($conexion,$sql2);
	
	$cadena="<label></label>
	<select id='lista3' name='lista3'>";

	while ($ver2=mysqli_fetch_row($result2)){
		$cadena=$cadena.'<option value='.$ver2[0].'>'.utf8_encode($ver2[1]).'</option>';
	}
	
	echo $cadena."</select>";

?>