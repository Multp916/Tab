<?php 


include './conexion.php';


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mostrar datos</title>
</head>
<body>

	<table border="1">
		
		<tr>
			<td>Id</td>
			<td>Primer Nombre</td>
			<td>Segundo Nombre</td>
			<td>Primer Apellido</td>
			<td>Segundo Apellido</td>
			<td>Colonia</td>
			<td>Calle</td>
			<td>Numero Externo</td>


		</tr>

		<?php 
			$con = conexion();
			$sql = "SELECT * from tabla1";
			$query = mysqli_query($con, $sql);

			if ($query) {
			while ($row=mysqli_fetch_assoc($query)) {
				$Id=$row['Id'];
				$Pn=$row['Primer Nombre'];
				$Sn=$row['Segundo Nombre'];
				$Pa=$row['Primer Apellido'];
				$Sa=$row['Segundo Apellido'];
				$Col=$row['Colonia'];
				$Ca=$row['Calle'];
				$Ne=$row['Numero Externo'];

			 ?>

			 <tr>
			 	<td><?php echo $Id; ?></td>
			 	<td><?php echo $Pn; ?></td>
			 	<td><?php echo $Sn; ?></td>
			 	<td><?php echo $Pa; ?></td>
			 	<td><?php echo $Sa; ?></td>
			 	<td><?php echo $Col; ?></td>
			 	<td><?php echo $Ca; ?></td>
			 	<td><?php echo $Ne; ?></td>
			 </tr>
		<?php
		}
	}
		 ?>

	</table>

</body>
</html>