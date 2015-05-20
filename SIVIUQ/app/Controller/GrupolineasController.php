<?php
App::uses('AppController', 'Controller');
/**
 * Grupolineas Controller
 *
 * @property Grupolinea $Grupolinea
 * @property PaginatorComponent $Paginator
 */
class GrupolineasController extends AppController {

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
		$this->Grupolinea->recursive = 0;
		$this->set('grupolineas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Grupolinea->exists($id)) {
			throw new NotFoundException(__('Invalid grupolinea'));
		}
		$options = array('conditions' => array('Grupolinea.' . $this->Grupolinea->primaryKey => $id));
		$this->set('grupolinea', $this->Grupolinea->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Grupolinea->create();
			if ($this->Grupolinea->save($this->request->data)) {
				$this->Session->setFlash(__('The grupolinea has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupolinea could not be saved. Please, try again.'));
			}
		}
		$lineas = $this->Grupolinea->Linea->find('list');
		$grupos = $this->Grupolinea->Grupo->find('list');
		$this->set(compact('lineas', 'grupos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Grupolinea->exists($id)) {
			throw new NotFoundException(__('Invalid grupolinea'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Grupolinea->save($this->request->data)) {
				$this->Session->setFlash(__('The grupolinea has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupolinea could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Grupolinea.' . $this->Grupolinea->primaryKey => $id));
			$this->request->data = $this->Grupolinea->find('first', $options);
		}
		$lineas = $this->Grupolinea->Linea->find('list');
		$grupos = $this->Grupolinea->Grupo->find('list');
		$this->set(compact('lineas', 'grupos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Grupolinea->id = $id;
		if (!$this->Grupolinea->exists()) {
			throw new NotFoundException(__('Invalid grupolinea'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Grupolinea->delete()) {
			$this->Session->setFlash(__('The grupolinea has been deleted.'));
		} else {
			$this->Session->setFlash(__('The grupolinea could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
