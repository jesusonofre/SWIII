<?php
App::uses('AppController', 'Controller');
/**
 * Educacions Controller
 *
 * @property Educacion $Educacion
 * @property PaginatorComponent $Paginator
 */
class EducacionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Educacion->recursive = 0;
		$this->set('educacions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Educacion->exists($id)) {
			throw new NotFoundException(__('Invalid educacion'));
		}
		$options = array('conditions' => array('Educacion.' . $this->Educacion->primaryKey => $id));
		$this->set('educacion', $this->Educacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Educacion->create();
			if ($this->Educacion->save($this->request->data)) {
				$this->Session->setFlash(__('The educacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educacion could not be saved. Please, try again.'));
			}
		}
		$hojas = $this->Educacion->Hoja->find('list', array('fields' => array('id','nombre')));
		$this->set(compact('hojas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Educacion->exists($id)) {
			throw new NotFoundException(__('Invalid educacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Educacion->save($this->request->data)) {
				$this->Session->setFlash(__('The educacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Educacion.' . $this->Educacion->primaryKey => $id));
			$this->request->data = $this->Educacion->find('first', $options);
		}
		$hojas = $this->Educacion->Hoja->find('list');
		$this->set(compact('hojas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Educacion->id = $id;
		if (!$this->Educacion->exists()) {
			throw new NotFoundException(__('Invalid educacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Educacion->delete()) {
			$this->Session->setFlash(__('The educacion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The educacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
