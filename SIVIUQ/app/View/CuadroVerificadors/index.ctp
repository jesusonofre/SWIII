<div align="center">
<img src="/proyectoPHP/img/banner1.jpg">
</div>

<h2><strong><P ALIGN=center> Listado Cuadro de Verificaciones </strong></h2>

<?php
	echo $this->Html->link('Crear Cuadro Verificaciones', array('controller'=>'cuadroVerificadors','action'=>'crear'));


 ?>

<table>
	<tr>
		<td><strong>ID</strong></td>
		<td><strong>Titulo</strong></td>
		<td><strong>Grupo De Investigacion</strong></td>
		
		

	</tr>

	<?php foreach ($cuadros as $cuadro ) :?>

		<tr>
			<td><?php echo $cuadro['CuadroVerificador']['id'];?></td>
			<td><?php echo $cuadro['CuadroVerificador']['titulo'];?></td>
			
			<td><?php echo $cuadro['CuadroVerificador']['grupo'];?></td>
		
			

			<td><?php echo $this->Html->link(' detalle', array('controller'=>'semilleros','action'=>'ver', $cuadro['Semillero']['id']));?></td>

		</tr>
	<?php endforeach ; ?>	
	

</table>