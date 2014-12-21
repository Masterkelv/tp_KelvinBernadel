<?php
App::uses('AppController', 'Controller');
/**
 * Factions Controller
 *
 * @property Faction $Faction
 * @property PaginatorComponent $Paginator
 */
class FactionsController extends AppController {

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
		if ($this->request->is('ajax')) {
        $term = $this->request->query('term');
        $carNames = $this->Title->getTitleNames($term);
        $this->set(compact('titleNames'));
        $this->set('_serialize', 'titleNames');
      }
		$this->Faction->recursive = 0;
		$this->set('factions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Faction->exists($id)) {
			throw new NotFoundException(__('Invalid faction'));
		}
		$options = array('conditions' => array('Faction.' . $this->Faction->primaryKey => $id));
		$this->set('faction', $this->Faction->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Faction->create();
			if ($this->Faction->save($this->request->data)) {
				$this->Session->setFlash(__('The faction has been saved.'), array ('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faction could not be saved. Please, try again.'), array ('class' => 'alert alert-danger'));
			}
		}
		$members = $this->Faction->Member->find('list');
		$members = $this->Faction->Member->find('list');
		$this->set(compact('members', 'members'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Faction->exists($id)) {
			throw new NotFoundException(__('Invalid faction'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Faction->save($this->request->data)) {
				$this->Session->setFlash(__('The faction has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faction could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Faction.' . $this->Faction->primaryKey => $id));
			$this->request->data = $this->Faction->find('first', $options);
		}
		$members = $this->Faction->Member->find('list');
		$members = $this->Faction->Member->find('list');
		$this->set(compact('members', 'members'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Faction->id = $id;
		if (!$this->Faction->exists()) {
			throw new NotFoundException(__('Invalid faction'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Faction->delete()) {
			$this->Session->setFlash(__('The faction has been deleted.'));
		} else {
			$this->Session->setFlash(__('The faction could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
