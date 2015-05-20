<?php
App::uses('AppController', 'Controller');
/**
 * Proyectos Controller
 *
 * @property Proyecto $Proyecto
 * @property PaginatorComponent $Paginator
 */
class ProyectosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $paginate = array(

			'limit' => 2,

		);
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Proyecto->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$this->set('proyectos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proyecto->exists($id)) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		$options = array('conditions' => array('Proyecto.' . $this->Proyecto->primaryKey => $id));
		$this->set('proyecto', $this->Proyecto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proyecto->create();
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash(__('The proyecto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proyecto could not be saved. Please, try again.'));
			}
		}
		$estados = $this->Proyecto->Estado->find('list', array('fields' => array('id','nombre')));
			$this->set('estados',$estados );

		$lineas = $this->Proyecto->Linea->find('list', array('fields' => array('id','nombre')));
			$this->set('lineas',$lineas );

		$grupos = $this->Proyecto->Grupo->find('list', array('fields' => array('id','nombre')));
			$this->set('grupos',$grupos );

		$evaluadors = $this->Proyecto->Evaluador->find('list', array('fields' => array('id','nombre')));
		$this->set('evaluadors',$evaluadors);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Proyecto->exists($id)) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash(__('The proyecto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proyecto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Proyecto.' . $this->Proyecto->primaryKey => $id));
			$this->request->data = $this->Proyecto->find('first', $options);
		}
	$estados = $this->Proyecto->Estado->find('list', array('fields' => array('id','nombre')));
			$this->set('estados',$estados );

		$lineas = $this->Proyecto->Linea->find('list', array('fields' => array('id','nombre')));
			$this->set('lineas',$lineas );

		$grupos = $this->Proyecto->Grupo->find('list', array('fields' => array('id','nombre')));
			$this->set('grupos',$grupos );

		$evaluadors = $this->Proyecto->Evaluador->find('list', array('fields' => array('id','nombre')));
		$this->set('evaluadors',$evaluadors);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Proyecto->id = $id;
		if (!$this->Proyecto->exists()) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Proyecto->delete()) {
			$this->Session->setFlash(__('The proyecto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The proyecto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
