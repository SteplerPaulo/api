<?php
class MeasurableItemsController extends AppController {

	var $name = 'MeasurableItems';

	function index() {
		$this->MeasurableItem->recursive = 0;
		$this->set('measurableItems', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid measurable item', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('measurableItem', $this->MeasurableItem->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MeasurableItem->create();
			if ($this->MeasurableItem->save($this->data)) {
				$this->Session->setFlash(__('The measurable item has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The measurable item could not be saved. Please, try again.', true));
			}
		}
		$generalComponents = $this->MeasurableItem->GeneralComponent->find('list');
		$recordbookDetails = $this->MeasurableItem->RecordbookDetail->find('list');
		$this->set(compact('generalComponents', 'recordbookDetails'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid measurable item', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->MeasurableItem->save($this->data)) {
				$this->Session->setFlash(__('The measurable item has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The measurable item could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MeasurableItem->read(null, $id);
		}
		$generalComponents = $this->MeasurableItem->GeneralComponent->find('list');
		$recordbookDetails = $this->MeasurableItem->RecordbookDetail->find('list');
		$this->set(compact('generalComponents', 'recordbookDetails'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for measurable item', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MeasurableItem->delete($id)) {
			$this->Session->setFlash(__('Measurable item deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Measurable item was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
