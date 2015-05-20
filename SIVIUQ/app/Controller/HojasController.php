<?php
App::uses('AppController', 'Controller');
/**
 * Hojas Controller
 *
 * @property Hoja $Hoja
 * @property PaginatorComponent $Paginator
 */
class HojasController extends AppController {

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
		$this->Hoja->recursive = 0;
		$this->set('hojas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hoja->exists($id)) {
			throw new NotFoundException(__('Invalid hoja'));
		}
		$options = array('conditions' => array('Hoja.' . $this->Hoja->primaryKey => $id));
		$this->set('hoja', $this->Hoja->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hoja->create();
			if ($this->Hoja->save($this->request->data)) {
				$this->Session->setFlash(__('The hoja has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hoja could not be saved. Please, try again.'));
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
		if (!$this->Hoja->exists($id)) {
			throw new NotFoundException(__('Invalid hoja'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Hoja->save($this->request->data)) {
				$this->Session->setFlash(__('The hoja has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hoja could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hoja.' . $this->Hoja->primaryKey => $id));
			$this->request->data = $this->Hoja->find('first', $options);
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
		$this->Hoja->id = $id;
		if (!$this->Hoja->exists()) {
			throw new NotFoundException(__('Invalid hoja'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Hoja->delete()) {
			$this->Session->setFlash(__('The hoja has been deleted.'));
		} else {
			$this->Session->setFlash(__('The hoja could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
