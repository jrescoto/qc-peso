<?php
App::uses('AppController', 'Controller');
/**
 * Applicants Controller
 *
 * @property Applicant $Applicant
 */
class ApplicantsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Applicant->recursive = 0;
		$this->set('applicants', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Applicant->id = $id;
		if (!$this->Applicant->exists()) {
			throw new NotFoundException(__('Invalid applicant'));
		}
		$this->set('applicant', $this->Applicant->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Applicant->create();
			if ($this->Applicant->save($this->request->data)) {
				$this->Session->setFlash(__('The applicant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The applicant could not be saved. Please, try again.'));
			}
		}
		$users = $this->Applicant->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Applicant->id = $id;
		if (!$this->Applicant->exists()) {
			throw new NotFoundException(__('Invalid applicant'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Applicant->save($this->request->data)) {
				$this->Session->setFlash(__('The applicant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The applicant could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Applicant->read(null, $id);
		}
		$users = $this->Applicant->User->find('list');
		$this->set(compact('users'));
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
		$this->Applicant->id = $id;
		if (!$this->Applicant->exists()) {
			throw new NotFoundException(__('Invalid applicant'));
		}
		if ($this->Applicant->delete()) {
			$this->Session->setFlash(__('Applicant deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Applicant was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
