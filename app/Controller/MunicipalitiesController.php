<?php
App::uses('AppController', 'Controller');
/**
 * Municipalities Controller
 *
 * @property Municipality $Municipality
 */
class MunicipalitiesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Municipality->recursive = 0;
		$this->set('municipalities', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Municipality->id = $id;
		if (!$this->Municipality->exists()) {
			throw new NotFoundException(__('Invalid municipality'));
		}
		$this->set('municipality', $this->Municipality->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Municipality->create();
			if ($this->Municipality->save($this->request->data)) {
				$this->Session->setFlash(__('The municipality has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipality could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Municipality->id = $id;
		if (!$this->Municipality->exists()) {
			throw new NotFoundException(__('Invalid municipality'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Municipality->save($this->request->data)) {
				$this->Session->setFlash(__('The municipality has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipality could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Municipality->read(null, $id);
		}
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
		$this->Municipality->id = $id;
		if (!$this->Municipality->exists()) {
			throw new NotFoundException(__('Invalid municipality'));
		}
		if ($this->Municipality->delete()) {
			$this->Session->setFlash(__('Municipality deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Municipality was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
