<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'SIVIUQ: Sistema de informacion Vicerrectoria de Investigaciones');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

<div align="center">
<img src="/SIVIUQ/img/banner1.jpg">
</div>

	
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
			<p>

				<?php echo('Redes Sociales'); ?>
			</p>
		</div>


	</div>

<div class="custom">
  <table border="0" cellpadding="0" cellspacing="0" align="center" style="width: 1300px;">
<tbody>
<tr>
<td style="width: 120px;">&nbsp;<a href="https://twitter.com/Uniquindio/" target="_blank"><img src="/restaurante/img/iconos_redes-01.png" width="28" height="26" alt="iconos redes-01"></a><a href="http://www.facebook.com/UniquindioFanPage/" target="_blank"><img src="/restaurante/img/iconos_redes-02.png" width="28" height="26" alt="iconos redes-02"></a><img src="/restaurante/img/youtube_icono-04.png" width="29" height="29" alt="youtube icono-04"></td>
<td style="text-align: center;"><font color="#EFFBF5">Carrera 15 Calle 12 Norte
Armenia, Quindío, Colombia </br>
Tel.: +57 (6) 7359300
Quejas y Reclamos: 018000 96 35 78 opción 5
</font></td>




</tr>
</tbody>
</table></div>
<!-- end nostyle content -->
	
</body>
</html>
