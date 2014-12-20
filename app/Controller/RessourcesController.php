<?php
App::uses('AppController', 'Controller');
/**
 * Ressources Controller
 *
 * @property Ressource $Ressource
 * @property PaginatorComponent $Paginator
 */
class RessourcesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Ressource->recursive = 0;
		$this->set('ressources', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ressource->exists($id)) {
			throw new NotFoundException(__('Invalid ressource'));
		}
		$options = array('conditions' => array('Ressource.' . $this->Ressource->primaryKey => $id));
		$this->set('ressource', $this->Ressource->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ressource->create();
			if ($this->Ressource->save($this->request->data)) {
				$this->Session->setFlash(__('The ressource has been saved.'), array ('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ressource could not be saved. Please, try again.'), array ('class' => 'alert alert-danger'));
			}
		}
		$members = $this->Ressource->Member->find('list');
		$this->set(compact('members'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Ressource->exists($id)) {
			throw new NotFoundException(__('Invalid ressource'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ressource->save($this->request->data)) {
				$this->Session->setFlash(__('The ressource has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ressource could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ressource.' . $this->Ressource->primaryKey => $id));
			$this->request->data = $this->Ressource->find('first', $options);
		}
		$members = $this->Ressource->Member->find('list');
		$this->set(compact('members'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Ressource->id = $id;
		if (!$this->Ressource->exists()) {
			throw new NotFoundException(__('Invalid ressource'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ressource->delete()) {
			$this->Session->setFlash(__('The ressource has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ressource could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
