<?php
App::uses('AppController', 'Controller');
/**
 * Proinvestigadors Controller
 *
 * @property Proinvestigador $Proinvestigador
 * @property PaginatorComponent $Paginator
 */
class ProinvestigadorsController extends AppController {

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
		$this->Proinvestigador->recursive = 0;
		$this->set('proinvestigadors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proinvestigador->exists($id)) {
			throw new NotFoundException(__('Invalid proinvestigador'));
		}
		$options = array('conditions' => array('Proinvestigador.' . $this->Proinvestigador->primaryKey => $id));
		$this->set('proinvestigador', $this->Proinvestigador->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proinvestigador->create();
			if ($this->Proinvestigador->save($this->request->data)) {
				$this->Session->setFlash(__('The proinvestigador has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proinvestigador could not be saved. Please, try again.'));
			}
		}
		$proyectos = $this->Proinvestigador->Proyecto->find('list', array('fields' => array('id','titulo')));
		$this->set('proyectos', $proyectos);

		$investigadors = $this->Proinvestigador->Investigador->find('list', array('fields' => array('id','nombre')));
		$this->set('investigadors',$investigadors);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Proinvestigador->exists($id)) {
			throw new NotFoundException(__('Invalid proinvestigador'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proinvestigador->save($this->request->data)) {
				$this->Session->setFlash(__('The proinvestigador has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proinvestigador could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Proinvestigador.' . $this->Proinvestigador->primaryKey => $id));
			$this->request->data = $this->Proinvestigador->find('first', $options);
		}
	$proyectos = $this->Proinvestigador->Proyecto->find('list', array('fields' => array('id','titulo')));
		$this->set('proyectos', $proyectos);

		$investigadors = $this->Proinvestigador->Investigador->find('list', array('fields' => array('id','nombre')));
		$this->set('investigadors',$investigadors);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Proinvestigador->id = $id;
		if (!$this->Proinvestigador->exists()) {
			throw new NotFoundException(__('Invalid proinvestigador'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Proinvestigador->delete()) {
			$this->Session->setFlash(__('The proinvestigador has been deleted.'));
		} else {
			$this->Session->setFlash(__('The proinvestigador could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
