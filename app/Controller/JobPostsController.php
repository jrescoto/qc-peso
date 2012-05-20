<?php
App::uses('AppController', 'Controller');
/**
 * JobPosts Controller
 *
 * @property JobPost $JobPost
 */
class JobPostsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->JobPost->recursive = 0;
		$this->set('jobPosts', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->JobPost->id = $id;
		if (!$this->JobPost->exists()) {
			throw new NotFoundException(__('Invalid job post'));
		}
		$this->set('jobPost', $this->JobPost->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JobPost->create();
			if ($this->JobPost->save($this->request->data)) {
				$this->Session->setFlash(__('The job post has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job post could not be saved. Please, try again.'));
			}
		}
		$jobTags = $this->JobPost->JobTag->find('list');
		$businesses = $this->JobPost->Business->find('list');
		$this->set(compact('jobTags', 'businesses'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->JobPost->id = $id;
		if (!$this->JobPost->exists()) {
			throw new NotFoundException(__('Invalid job post'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->JobPost->save($this->request->data)) {
				$this->Session->setFlash(__('The job post has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job post could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->JobPost->read(null, $id);
		}
		$jobTags = $this->JobPost->JobTag->find('list');
		$businesses = $this->JobPost->Business->find('list');
		$this->set(compact('jobTags', 'businesses'));
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
		$this->JobPost->id = $id;
		if (!$this->JobPost->exists()) {
			throw new NotFoundException(__('Invalid job post'));
		}
		if ($this->JobPost->delete()) {
			$this->Session->setFlash(__('Job post deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Job post was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
