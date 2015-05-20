<?php
App::uses('AppController', 'Controller');
/**
 * Convocatorias Controller
 *
 * @property Convocatoria $Convocatoria
 * @property PaginatorComponent $Paginator
 */
class ConvocatoriasController extends AppController {

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
		$this->Convocatoria->recursive = 0;
		$this->set('convocatorias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Convocatoria->exists($id)) {
			throw new NotFoundException(__('Invalid convocatoria'));
		}
		$options = array('conditions' => array('Convocatoria.' . $this->Convocatoria->primaryKey => $id));
		$this->set('convocatoria', $this->Convocatoria->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Convocatoria->create();
			if ($this->Convocatoria->save($this->request->data)) {
				$this->Session->setFlash(__('The convocatoria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The convocatoria could not be saved. Please, try again.'));
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
		if (!$this->Convocatoria->exists($id)) {
			throw new NotFoundException(__('Invalid convocatoria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Convocatoria->save($this->request->data)) {
				$this->Session->setFlash(__('The convocatoria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The convocatoria could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Convocatoria.' . $this->Convocatoria->primaryKey => $id));
			$this->request->data = $this->Convocatoria->find('first', $options);
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
		$this->Convocatoria->id = $id;
		if (!$this->Convocatoria->exists()) {
			throw new NotFoundException(__('Invalid convocatoria'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Convocatoria->delete()) {
			$this->Session->setFlash(__('The convocatoria has been deleted.'));
		} else {
			$this->Session->setFlash(__('The convocatoria could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
