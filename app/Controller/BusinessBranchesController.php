<?php
App::uses('AppController', 'Controller');
/**
 * BusinessBranches Controller
 *
 * @property BusinessBranch $BusinessBranch
 */
class BusinessBranchesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BusinessBranch->recursive = 0;
		$this->set('businessBranches', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BusinessBranch->id = $id;
		if (!$this->BusinessBranch->exists()) {
			throw new NotFoundException(__('Invalid business branch'));
		}
		$this->set('businessBranch', $this->BusinessBranch->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BusinessBranch->create();
			if ($this->BusinessBranch->save($this->request->data)) {
				$this->Session->setFlash(__('The business branch has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business branch could not be saved. Please, try again.'));
			}
		}
		$businesses = $this->BusinessBranch->Business->find('list');
		$this->set(compact('businesses'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->BusinessBranch->id = $id;
		if (!$this->BusinessBranch->exists()) {
			throw new NotFoundException(__('Invalid business branch'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BusinessBranch->save($this->request->data)) {
				$this->Session->setFlash(__('The business branch has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business branch could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->BusinessBranch->read(null, $id);
		}
		$businesses = $this->BusinessBranch->Business->find('list');
		$this->set(compact('businesses'));
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
		$this->BusinessBranch->id = $id;
		if (!$this->BusinessBranch->exists()) {
			throw new NotFoundException(__('Invalid business branch'));
		}
		if ($this->BusinessBranch->delete()) {
			$this->Session->setFlash(__('Business branch deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Business branch was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
