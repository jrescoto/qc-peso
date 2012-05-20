<?php
App::uses('AppController', 'Controller');
/**
 * Applications Controller
 *
 * @property Application $Application
 */
class ApplicationsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Application->recursive = 0;
		$this->set('applications', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}
		$this->set('application', $this->Application->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Application->create();
			if ($this->Application->save($this->request->data)) {
				$this->Session->setFlash(__('The application has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The application could not be saved. Please, try again.'));
			}
		}
		$applicants = $this->Application->Applicant->find('list');
		$jobPosts = $this->Application->JobPost->find('list');
		$this->set(compact('applicants', 'jobPosts'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Application->save($this->request->data)) {
				$this->Session->setFlash(__('The application has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The application could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Application->read(null, $id);
		}
		$applicants = $this->Application->Applicant->find('list');
		$jobPosts = $this->Application->JobPost->find('list');
		$this->set(compact('applicants', 'jobPosts'));
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
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}
		if ($this->Application->delete()) {
			$this->Session->setFlash(__('Application deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Application was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
