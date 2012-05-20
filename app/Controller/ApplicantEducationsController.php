<?php
App::uses('AppController', 'Controller');
/**
 * ApplicantEducations Controller
 *
 * @property ApplicantEducation $ApplicantEducation
 */
class ApplicantEducationsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ApplicantEducation->recursive = 0;
		$this->set('applicantEducations', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ApplicantEducation->id = $id;
		if (!$this->ApplicantEducation->exists()) {
			throw new NotFoundException(__('Invalid applicant education'));
		}
		$this->set('applicantEducation', $this->ApplicantEducation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ApplicantEducation->create();
			if ($this->ApplicantEducation->save($this->request->data)) {
				$this->Session->setFlash(__('The applicant education has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The applicant education could not be saved. Please, try again.'));
			}
		}
		$applicants = $this->ApplicantEducation->Applicant->find('list');
		$this->set(compact('applicants'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ApplicantEducation->id = $id;
		if (!$this->ApplicantEducation->exists()) {
			throw new NotFoundException(__('Invalid applicant education'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ApplicantEducation->save($this->request->data)) {
				$this->Session->setFlash(__('The applicant education has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The applicant education could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ApplicantEducation->read(null, $id);
		}
		$applicants = $this->ApplicantEducation->Applicant->find('list');
		$this->set(compact('applicants'));
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
		$this->ApplicantEducation->id = $id;
		if (!$this->ApplicantEducation->exists()) {
			throw new NotFoundException(__('Invalid applicant education'));
		}
		if ($this->ApplicantEducation->delete()) {
			$this->Session->setFlash(__('Applicant education deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Applicant education was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
