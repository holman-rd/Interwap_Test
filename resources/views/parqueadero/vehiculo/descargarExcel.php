<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=Parqueadero.xls');

	require_once('conexion.php');
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM vehiculo";
	$result=mysqli_query($link, $query);
?>

<table border="1">
	<tr style="background-color:white;">
		<th>Placa</th>
		<th>Telefono</th>
		<th>Color</th>
		<th>Estado</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['placa']; ?></td>
					<td><?php echo $row['telefono']; ?></td>
					<td><?php echo $row['color']; ?></td>
					<td><?php echo $row['estado']; ?></td>
				</tr>	

			<?php
		}

	?>
</table>