<?php
App::uses('AppController', 'Controller');
/**
 * JobTags Controller
 *
 * @property JobTag $JobTag
 */
class JobTagsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->JobTag->recursive = 0;
		$this->set('jobTags', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->JobTag->id = $id;
		if (!$this->JobTag->exists()) {
			throw new NotFoundException(__('Invalid job tag'));
		}
		$this->set('jobTag', $this->JobTag->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JobTag->create();
			if ($this->JobTag->save($this->request->data)) {
				$this->Session->setFlash(__('The job tag has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job tag could not be saved. Please, try again.'));
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
		$this->JobTag->id = $id;
		if (!$this->JobTag->exists()) {
			throw new NotFoundException(__('Invalid job tag'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->JobTag->save($this->request->data)) {
				$this->Session->setFlash(__('The job tag has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job tag could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->JobTag->read(null, $id);
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
		$this->JobTag->id = $id;
		if (!$this->JobTag->exists()) {
			throw new NotFoundException(__('Invalid job tag'));
		}
		if ($this->JobTag->delete()) {
			$this->Session->setFlash(__('Job tag deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Job tag was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
