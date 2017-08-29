<?php
App::uses('AppController', 'Controller');
/**
 * Lands Controller
 *
 * @property Land $Land
 * @property PaginatorComponent $Paginator
 */
class LandsController extends AppController {

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
		$this->Land->recursive = 0;
		$this->set('lands', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Land->exists($id)) {
			throw new NotFoundException(__('Invalid land'));
		}
		$options = array('conditions' => array('Land.' . $this->Land->primaryKey => $id));
		$this->set('land', $this->Land->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Land->create();
			if ($this->Land->save($this->request->data)) {
				$this->Flash->success(__('The land has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The land could not be saved. Please, try again.'));
			}
		}
		$owners = $this->Land->Owner->find('list');
		$this->set(compact('owners'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Land->exists($id)) {
			throw new NotFoundException(__('Invalid land'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Land->save($this->request->data)) {
				$this->Flash->success(__('The land has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The land could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Land.' . $this->Land->primaryKey => $id));
			$this->request->data = $this->Land->find('first', $options);
		}
		$owners = $this->Land->Owner->find('list');
		$this->set(compact('owners'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Land->id = $id;
		if (!$this->Land->exists()) {
			throw new NotFoundException(__('Invalid land'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Land->delete()) {
			$this->Flash->success(__('The land has been deleted.'));
		} else {
			$this->Flash->error(__('The land could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
