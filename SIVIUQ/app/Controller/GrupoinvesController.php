<?php
App::uses('AppController', 'Controller');
/**
 * Grupoinves Controller
 *
 * @property Grupoinfe $Grupoinfe
 * @property PaginatorComponent $Paginator
 */
class GrupoinvesController extends AppController {

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
		$this->Grupoinve->recursive = 0;
		$this->set('grupoinves', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Grupoinfe->exists($id)) {
			throw new NotFoundException(__('Invalid grupoinfe'));
		}
		$options = array('conditions' => array('Grupoinve.' . $this->Grupoinve->primaryKey => $id));
		$this->set('grupoinve', $this->Grupoinve->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Grupoinve->create();
			if ($this->Grupoinve->save($this->request->data)) {
				$this->Session->setFlash(__('The grupoinfe has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupoinfe could not be saved. Please, try again.'));
			}
		}
		$invesigadors = $this->Grupoinve->Invesigador->find('list', array('fields' => array('id','nombre')));
		$this->set('invesigadors', $invesigadors );
		$grupos = $this->Grupoinve->Grupo->find('list', array('fields' => array('id','nombre')));
		$this->set('grupos',$grupos);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Grupoinve->exists($id)) {
			throw new NotFoundException(__('Invalid grupoinfe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Grupoinve->save($this->request->data)) {
				$this->Session->setFlash(__('The grupoinfe has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupoinfe could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Grupoinve.' . $this->Grupoinve->primaryKey => $id));
			$this->request->data = $this->Grupoinve->find('first', $options);
		}
		$invesigadors = $this->Grupoinve->Invesigador->find('list');
		$grupos = $this->Grupoinve->Grupo->find('list');
		$this->set(compact('invesigadors', 'grupos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Grupoinve->id = $id;
		if (!$this->Grupoinve->exists()) {
			throw new NotFoundException(__('Invalid grupoinfe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Grupoinve->delete()) {
			$this->Session->setFlash(__('The grupoinfe has been deleted.'));
		} else {
			$this->Session->setFlash(__('The grupoinfe could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
