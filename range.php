<?php
	require'conn.php';
	if(ISSET($_POST['search'])){
		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$query=mysqli_query($conn, "SELECT * FROM `datosnodo` WHERE `date_submit`= '$date1'") or die(mysqli_error($conn));
		$row=mysqli_num_rows($query);
		if($row>0){
			while($fetch=mysqli_fetch_array($query)){
?>
	<tr align="center" >
		<td><?php echo $fetch['id_nodo']?></td>
		<td><?php echo $fetch['lluvia']?></td>
		<td><?php echo $fetch['cant_basura']?></td>
		<td><?php echo $fetch['residuos']?></td>
		<td><?php echo $fetch['porcentaje_agua']?></td>
		<td><?php echo $fetch['nivel_agua']?></td>
		<td>
                  <a href="<?= 'borrar.php?id=' . escapar($fila["id"]) ?>">🗑️Borrar</a>
                  <a href="<?= 'editar.php?id=' . escapar($fila["id"]) ?>">✏️Editar</a>
                </td>

	

		
	</tr>
<?php
			}
		}else{
			echo'
			<tr>
				<td colspan = "5"><center>Registros no Existen</center></td>
			</tr>';

		}
	}else{
		$query=mysqli_query($conn, "SELECT * FROM `datosnodo`  ") or die(mysqli_error($con));
		while($fetch=mysqli_fetch_array($query)){

?>
	<tr align="center">
	<td><?php echo $fetch['id_nodo']?></td>
		<td><?php echo $fetch['lluvia']?></td>
		<td><?php echo $fetch['cant_basura']?></td>
		<td><?php echo $fetch['residuos']?></td>
		<td><?php echo $fetch['porcentaje_agua']?></td>
		<td><?php echo $fetch['nivel_agua']?></td>

		<td>
                  <a href="<?= 'borrar.php?id=' . escapar($fila["id"]) ?>">🗑️Borrar</a>
                  <a href="<?= 'editar.php?id=' . escapar($fila["id"]) ?>">✏️Editar</a>
                </td>
	</tr>


<?php
		}
	}
?>
