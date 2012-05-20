<?php
App::uses('AppController', 'Controller');
/**
 * Vacancies Controller
 *
 * @property Vacancy $Vacancy
 */
class VacanciesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vacancy->recursive = 0;
		$this->set('vacancies', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Vacancy->id = $id;
		if (!$this->Vacancy->exists()) {
			throw new NotFoundException(__('Invalid vacancy'));
		}
		$this->set('vacancy', $this->Vacancy->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vacancy->create();
			if ($this->Vacancy->save($this->request->data)) {
				$this->Session->setFlash(__('The vacancy has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vacancy could not be saved. Please, try again.'));
			}
		}
		$jobPosts = $this->Vacancy->JobPost->find('list');
		$this->set(compact('jobPosts'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Vacancy->id = $id;
		if (!$this->Vacancy->exists()) {
			throw new NotFoundException(__('Invalid vacancy'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vacancy->save($this->request->data)) {
				$this->Session->setFlash(__('The vacancy has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vacancy could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vacancy->read(null, $id);
		}
		$jobPosts = $this->Vacancy->JobPost->find('list');
		$this->set(compact('jobPosts'));
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
		$this->Vacancy->id = $id;
		if (!$this->Vacancy->exists()) {
			throw new NotFoundException(__('Invalid vacancy'));
		}
		if ($this->Vacancy->delete()) {
			$this->Session->setFlash(__('Vacancy deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vacancy was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
