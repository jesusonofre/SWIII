<?php
App::uses('AppController', 'Controller');
/**
 * Publicacions Controller
 *
 * @property Publicacion $Publicacion
 * @property PaginatorComponent $Paginator
 */
class PublicacionsController extends AppController {

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
		$this->Publicacion->recursive = 0;
		$this->set('publicacions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Publicacion->exists($id)) {
			throw new NotFoundException(__('Invalid publicacion'));
		}
		$options = array('conditions' => array('Publicacion.' . $this->Publicacion->primaryKey => $id));
		$this->set('publicacion', $this->Publicacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Publicacion->create();
			if ($this->Publicacion->save($this->request->data)) {
				$this->Session->setFlash(__('The publicacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The publicacion could not be saved. Please, try again.'));
			}
		}
		$proyectos = $this->Publicacion->Proyecto->find('list');
		$this->set(compact('proyectos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Publicacion->exists($id)) {
			throw new NotFoundException(__('Invalid publicacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Publicacion->save($this->request->data)) {
				$this->Session->setFlash(__('The publicacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The publicacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Publicacion.' . $this->Publicacion->primaryKey => $id));
			$this->request->data = $this->Publicacion->find('first', $options);
		}
		$proyectos = $this->Publicacion->Proyecto->find('list');
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
		$this->Publicacion->id = $id;
		if (!$this->Publicacion->exists()) {
			throw new NotFoundException(__('Invalid publicacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Publicacion->delete()) {
			$this->Session->setFlash(__('The publicacion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The publicacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
