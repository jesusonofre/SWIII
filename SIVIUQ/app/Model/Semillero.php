<?php
		/**
		* Clase que representa una Convocatoria
		*/
		class Semillero extends AppModel
		{
			
			public $validate= array(
				'nombre'=> array(
					'rule'=>'notEmpty'),

				'modalidad'=>array(
					'rule'=>'notEmpty'),

				'grupoInvestigacion'=> array(
					'rule'=> 'notEmpty'),
				'lineaInvestigacion'=> array(
					'rule'=>'notEmpty'),
				'registradoPor'=>array(
					'rule'=>'notEmpty')


				);




			
		}
?>