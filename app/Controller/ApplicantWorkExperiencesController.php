<?php
App::uses('AppController', 'Controller');
/**
 * ApplicantWorkExperiences Controller
 *
 * @property ApplicantWorkExperience $ApplicantWorkExperience
 */
class ApplicantWorkExperiencesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ApplicantWorkExperience->recursive = 0;
		$this->set('applicantWorkExperiences', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ApplicantWorkExperience->id = $id;
		if (!$this->ApplicantWorkExperience->exists()) {
			throw new NotFoundException(__('Invalid applicant work experience'));
		}
		$this->set('applicantWorkExperience', $this->ApplicantWorkExperience->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ApplicantWorkExperience->create();
			if ($this->ApplicantWorkExperience->save($this->request->data)) {
				$this->Session->setFlash(__('The applicant work experience has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The applicant work experience could not be saved. Please, try again.'));
			}
		}
		$applicants = $this->ApplicantWorkExperience->Applicant->find('list');
		$this->set(compact('applicants'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ApplicantWorkExperience->id = $id;
		if (!$this->ApplicantWorkExperience->exists()) {
			throw new NotFoundException(__('Invalid applicant work experience'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ApplicantWorkExperience->save($this->request->data)) {
				$this->Session->setFlash(__('The applicant work experience has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The applicant work experience could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ApplicantWorkExperience->read(null, $id);
		}
		$applicants = $this->ApplicantWorkExperience->Applicant->find('list');
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
		$this->ApplicantWorkExperience->id = $id;
		if (!$this->ApplicantWorkExperience->exists()) {
			throw new NotFoundException(__('Invalid applicant work experience'));
		}
		if ($this->ApplicantWorkExperience->delete()) {
			$this->Session->setFlash(__('Applicant work experience deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Applicant work experience was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
