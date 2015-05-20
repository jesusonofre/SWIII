<?php
App::uses('AppController', 'Controller');
/**
 * Entidads Controller
 *
 * @property Entidad $Entidad
 * @property PaginatorComponent $Paginator
 */
class EntidadsController extends AppController {

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
		$this->Entidad->recursive = 0;
		$this->set('entidads', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Entidad->exists($id)) {
			throw new NotFoundException(__('Invalid entidad'));
		}
		$options = array('conditions' => array('Entidad.' . $this->Entidad->primaryKey => $id));
		$this->set('entidad', $this->Entidad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Entidad->create();
			if ($this->Entidad->save($this->request->data)) {
				$this->Session->setFlash(__('The entidad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entidad could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Entidad->exists($id)) {
			throw new NotFoundException(__('Invalid entidad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Entidad->save($this->request->data)) {
				$this->Session->setFlash(__('The entidad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entidad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Entidad.' . $this->Entidad->primaryKey => $id));
			$this->request->data = $this->Entidad->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Entidad->id = $id;
		if (!$this->Entidad->exists()) {
			throw new NotFoundException(__('Invalid entidad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Entidad->delete()) {
			$this->Session->setFlash(__('The entidad has been deleted.'));
		} else {
			$this->Session->setFlash(__('The entidad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
