<?php
App::uses('AppController', 'Controller');
/**
 * Proentidads Controller
 *
 * @property Proentidad $Proentidad
 * @property PaginatorComponent $Paginator
 */
class ProentidadsController extends AppController {

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
		$this->Proentidad->recursive = 0;
		$this->set('proentidads', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proentidad->exists($id)) {
			throw new NotFoundException(__('Invalid proentidad'));
		}
		$options = array('conditions' => array('Proentidad.' . $this->Proentidad->primaryKey => $id));
		$this->set('proentidad', $this->Proentidad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proentidad->create();
			if ($this->Proentidad->save($this->request->data)) {
				$this->Session->setFlash(__('The proentidad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proentidad could not be saved. Please, try again.'));
			}
		}
		$proyectos = $this->Proentidad->Proyecto->find('list');
		$entidads = $this->Proentidad->Entidad->find('list');
		$this->set(compact('proyectos', 'entidads'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Proentidad->exists($id)) {
			throw new NotFoundException(__('Invalid proentidad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proentidad->save($this->request->data)) {
				$this->Session->setFlash(__('The proentidad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proentidad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Proentidad.' . $this->Proentidad->primaryKey => $id));
			$this->request->data = $this->Proentidad->find('first', $options);
		}
		$proyectos = $this->Proentidad->Proyecto->find('list');
		$entidads = $this->Proentidad->Entidad->find('list');
		$this->set(compact('proyectos', 'entidads'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Proentidad->id = $id;
		if (!$this->Proentidad->exists()) {
			throw new NotFoundException(__('Invalid proentidad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Proentidad->delete()) {
			$this->Session->setFlash(__('The proentidad has been deleted.'));
		} else {
			$this->Session->setFlash(__('The proentidad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
