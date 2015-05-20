<?php
App::uses('AppController', 'Controller');
/**
 * Proentregas Controller
 *
 * @property Proentrega $Proentrega
 * @property PaginatorComponent $Paginator
 */
class ProentregasController extends AppController {

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
		$this->Proentrega->recursive = 0;
		$this->set('proentregas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proentrega->exists($id)) {
			throw new NotFoundException(__('Invalid proentrega'));
		}
		$options = array('conditions' => array('Proentrega.' . $this->Proentrega->primaryKey => $id));
		$this->set('proentrega', $this->Proentrega->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proentrega->create();
			if ($this->Proentrega->save($this->request->data)) {
				$this->Session->setFlash(__('The proentrega has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proentrega could not be saved. Please, try again.'));
			}
		}
		$proyectos = $this->Proentrega->Proyecto->find('list', array('fields' => array('id','titulo')));
		$this->set('proyectos',$proyectos);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Proentrega->exists($id)) {
			throw new NotFoundException(__('Invalid proentrega'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proentrega->save($this->request->data)) {
				$this->Session->setFlash(__('The proentrega has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proentrega could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Proentrega.' . $this->Proentrega->primaryKey => $id));
			$this->request->data = $this->Proentrega->find('first', $options);
		}
		$proyectos = $this->Proentrega->Proyecto->find('list');
		$this->set(compact('proyectos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Proentrega->id = $id;
		if (!$this->Proentrega->exists()) {
			throw new NotFoundException(__('Invalid proentrega'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Proentrega->delete()) {
			$this->Session->setFlash(__('The proentrega has been deleted.'));
		} else {
			$this->Session->setFlash(__('The proentrega could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
