<?php
App::uses('AppController', 'Controller');
/**
 * Investigadors Controller
 *
 * @property Investigador $Investigador
 * @property PaginatorComponent $Paginator
 */
class InvestigadorsController extends AppController {

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
		$this->Investigador->recursive = 0;
		$this->set('investigadors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Investigador->exists($id)) {
			throw new NotFoundException(__('Invalid investigador'));
		}
		$options = array('conditions' => array('Investigador.' . $this->Investigador->primaryKey => $id));
		$this->set('investigador', $this->Investigador->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Investigador->create();
			if ($this->Investigador->save($this->request->data)) {
				$this->Session->setFlash(__('The investigador has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The investigador could not be saved. Please, try again.'));
			}
		}

		$programas = $this->Investigador->Programa->find('list', array('fields' => array('id','nombre')));
		$this->set('programas',$programas);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Investigador->exists($id)) {
			throw new NotFoundException(__('Invalid investigador'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Investigador->save($this->request->data)) {
				$this->Session->setFlash(__('The investigador has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The investigador could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Investigador.' . $this->Investigador->primaryKey => $id));
			$this->request->data = $this->Investigador->find('first', $options);
		}
			$programas = $this->Investigador->Programa->find('list', array('fields' => array('id','nombre')));
		$this->set('programas',$programas);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Investigador->id = $id;
		if (!$this->Investigador->exists()) {
			throw new NotFoundException(__('Invalid investigador'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Investigador->delete()) {
			$this->Session->setFlash(__('The investigador has been deleted.'));
		} else {
			$this->Session->setFlash(__('The investigador could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
