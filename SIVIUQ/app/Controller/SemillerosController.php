<?php
	/**
	* Clase que representa un controlador de la clase Investigadores
	*/
	class SemillerosController extends AppController
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
			
			$this->set('semilleros', $this->Semillero-> find('all'));
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

			$semillero= $this->Semillero->findById($id);

			if (!$semillero) {
				throw new NotFoundException("El Semillero No existe");
				
			}


		/**
		* este semilleros es el que pasa a ser la variable que va a contener la tabla y el atributo en la view ver 
		*/
			$this->set('semilleros',$semillero);

		}

		public function crear()
		{
			if ($this->request->is('post')) 
			{
				$this->Semillero->create();
				if ($this->Semillero->save($this->request->data)) 
				{
					$this->Session->setFlash('El semillero ha sido creado ','default', array('class' => 'success'));

					/**
					*Redireccion a la pagina anterior cuando se hace el registro 
					*/
					return $this->redirect(array('action'=>'index'));
				}

				$this->Session->setFlash('No se pudo crear el semillero ');
			}
		}


		public function editar ($id=null)

		{
			if($id)
			{
				throw new NotFoundException("Datos incorrectos");
				
			}

			$semillero= $this->Mesero->findById($id);

			if(!$semillero)

			{
				throw new NotFoundException("El semillero no ha sido enconrtado");
				
			}

			if($this->request->is('post','put'))
			{
				$this->Semillero->id=$id;

				if($this->Semillero->save($this->request->data))
				{
					$this->Session->setFlash('El mesero ha sido creado ',$element='default',$params= array('class'=>'sucess'));
					return $this ->redirect(array('action' => 'index'));
				}

				$this->Session->setFlash('El registro ha sido Modificado');
			}

			if(!$this->request->data)
			{
				$this->request->data=$semillero;
			}
		}

	}
?>