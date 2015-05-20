<?php
App::uses('AppController', 'Controller');
/**
 * Evaluadors Controller
 *
 * @property Evaluador $Evaluador
 * @property PaginatorComponent $Paginator
 */
class EvaluadorsController extends AppController {

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
		$this->Evaluador->recursive = 0;
		$this->set('evaluadors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Evaluador->exists($id)) {
			throw new NotFoundException(__('Invalid evaluador'));
		}
		$options = array('conditions' => array('Evaluador.' . $this->Evaluador->primaryKey => $id));
		$this->set('evaluador', $this->Evaluador->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Evaluador->create();
			if ($this->Evaluador->save($this->request->data)) {
				$this->Session->setFlash(__('The evaluador has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluador could not be saved. Please, try again.'));
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
		if (!$this->Evaluador->exists($id)) {
			throw new NotFoundException(__('Invalid evaluador'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Evaluador->save($this->request->data)) {
				$this->Session->setFlash(__('The evaluador has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluador could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Evaluador.' . $this->Evaluador->primaryKey => $id));
			$this->request->data = $this->Evaluador->find('first', $options);
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
		$this->Evaluador->id = $id;
		if (!$this->Evaluador->exists()) {
			throw new NotFoundException(__('Invalid evaluador'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Evaluador->delete()) {
			$this->Session->setFlash(__('The evaluador has been deleted.'));
		} else {
			$this->Session->setFlash(__('The evaluador could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
