<?php
	$conexion=mysqli_connect('localhost','root','Shadowmast@1','peru');
	$Departamento=$_POST['Departamento'];
		$sql="SELECT IdDepartamento,IdProvincia,Provincia
		FROM provincia
		WHERE IdDepartamento='$Departamento'";
	$result=mysqli_query($conexion,$sql);
	
	$cadena="<label></label>
	<select id='lista2' name='lista2'>";

	while ($ver=mysqli_fetch_row($result)){
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	}
	
	echo $cadena."</select>";

?>
	