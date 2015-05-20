<?php
	/**
	* Clase que representa un controlador de la clase Investigadores
	*/
	class cuadroVerificadorsController extends AppController
	{
		/**
		* helpers que voy a utilizar 
		*/
		
		public $helpers = array('Html','Form');
		public $components = array('Session');

		public function index()
		{
			/**
			* Recupero todos los registros de la tabla investigadores,primero con una variable y luego con el modelo 
			*/
			
			$this->set('cuadros', $this->CuadroVerificador-> find('all'));
		}


		/**
		* Metodo ver que se refiere a los detalles del semillero  
		*/

		public function ver($id=null)
		{
			if (!$id) 
			{
				throw new NotFoundException("Datos Incorrectos");
				
			}

			$cuadro= $this->CuadroVerificacion->findById($id);

			if (!$cuadro) {
				throw new NotFoundException("El Semillero No existe");
				
			}


		/**
		* este semilleros es el que pasa a ser la variable que va a contener la tabla y el atributo en la view ver 
		*/
			$this->set('cuadro',$cuadro);

		}

		public function crear()
		{
			if ($this->request->is('post')) 
			{
				$this->CuadroVerificacion->create();
				if ($this->CuadroVerificacion->save($this->request->data)) 
				{
					$this->Session->setFlash('El cuadro de verificacion  ha sido creado ','default', array('class' => 'success'));

					/**
					*Redireccion a la pagina anterior cuando se hace el registro 
					*/
					return $this->redirect(array('action'=>'index'));
				}

				$this->Session->setFlash('No se pudo crear el cuadro de verificacion ');
			}
		}


	}
?>