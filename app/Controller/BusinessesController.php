<?php
App::uses('AppController', 'Controller');
/**
 * Businesses Controller
 *
 * @property Business $Business
 */
class BusinessesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Business->recursive = 0;
		$this->set('businesses', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Business->id = $id;
		if (!$this->Business->exists()) {
			throw new NotFoundException(__('Invalid business'));
		}
		$this->set('business', $this->Business->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Business->create();
			if ($this->Business->save($this->request->data)) {
				$this->Session->setFlash(__('The business has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business could not be saved. Please, try again.'));
			}
		}
		$users = $this->Business->User->find('list');
		$industries = $this->Business->Industry->find('list');
		$this->set(compact('users', 'industries'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Business->id = $id;
		if (!$this->Business->exists()) {
			throw new NotFoundException(__('Invalid business'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Business->save($this->request->data)) {
				$this->Session->setFlash(__('The business has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Business->read(null, $id);
		}
		$users = $this->Business->User->find('list');
		$industries = $this->Business->Industry->find('list');
		$this->set(compact('users', 'industries'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Business->id = $id;
		if (!$this->Business->exists()) {
			throw new NotFoundException(__('Invalid business'));
		}
		if ($this->Business->delete()) {
			$this->Session->setFlash(__('Business deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Business was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
