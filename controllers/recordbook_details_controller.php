<?php
class RecordbookDetailsController extends AppController {

	var $name = 'RecordbookDetails';

	function index() {
		$this->RecordbookDetail->recursive = 0;
		$this->set('recordbookDetails', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid recordbook detail', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('recordbookDetail', $this->RecordbookDetail->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->RecordbookDetail->create();
			if ($this->RecordbookDetail->save($this->data)) {
				$this->Session->setFlash(__('The recordbook detail has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recordbook detail could not be saved. Please, try again.', true));
			}
		}
		$recordbooks = $this->RecordbookDetail->Recordbook->find('list');
		$generalComponents = $this->RecordbookDetail->GeneralComponent->find('list');
		$this->set(compact('recordbooks', 'generalComponents'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid recordbook detail', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->RecordbookDetail->save($this->data)) {
				$this->Session->setFlash(__('The recordbook detail has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recordbook detail could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->RecordbookDetail->read(null, $id);
		}
		$recordbooks = $this->RecordbookDetail->Recordbook->find('list');
		$generalComponents = $this->RecordbookDetail->GeneralComponent->find('list');
		$this->set(compact('recordbooks', 'generalComponents'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for recordbook detail', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->RecordbookDetail->delete($id)) {
			$this->Session->setFlash(__('Recordbook detail deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Recordbook detail was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
