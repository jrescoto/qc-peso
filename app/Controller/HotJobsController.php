<?php
App::uses('AppController', 'Controller');
/**
 * HotJobs Controller
 *
 * @property HotJob $HotJob
 */
class HotJobsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->HotJob->recursive = 0;
		$this->set('hotJobs', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->HotJob->id = $id;
		if (!$this->HotJob->exists()) {
			throw new NotFoundException(__('Invalid hot job'));
		}
		$this->set('hotJob', $this->HotJob->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HotJob->create();
			if ($this->HotJob->save($this->request->data)) {
				$this->Session->setFlash(__('The hot job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hot job could not be saved. Please, try again.'));
			}
		}
		$jobTags = $this->HotJob->JobTag->find('list');
		$this->set(compact('jobTags'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->HotJob->id = $id;
		if (!$this->HotJob->exists()) {
			throw new NotFoundException(__('Invalid hot job'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HotJob->save($this->request->data)) {
				$this->Session->setFlash(__('The hot job has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hot job could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->HotJob->read(null, $id);
		}
		$jobTags = $this->HotJob->JobTag->find('list');
		$this->set(compact('jobTags'));
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
		$this->HotJob->id = $id;
		if (!$this->HotJob->exists()) {
			throw new NotFoundException(__('Invalid hot job'));
		}
		if ($this->HotJob->delete()) {
			$this->Session->setFlash(__('Hot job deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hot job was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
