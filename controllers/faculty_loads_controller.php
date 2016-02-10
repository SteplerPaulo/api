<?php
class FacultyLoadsController extends AppController {

	var $name = 'FacultyLoads';

	function index() {
		$this->FacultyLoad->recursive = 0;
		$this->set('facultyLoads', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid faculty load', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('facultyLoad', $this->FacultyLoad->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->FacultyLoad->create();
			if ($this->FacultyLoad->save($this->data)) {
				$this->Session->setFlash(__('The faculty load has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faculty load could not be saved. Please, try again.', true));
			}
		}
		$subjects = $this->FacultyLoad->Subject->find('list');
		$employees = $this->FacultyLoad->Employee->find('list');
		$sections = $this->FacultyLoad->Section->find('list');
		$this->set(compact('subjects', 'employees', 'sections'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid faculty load', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FacultyLoad->save($this->data)) {
				$this->Session->setFlash(__('The faculty load has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faculty load could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FacultyLoad->read(null, $id);
		}
		$subjects = $this->FacultyLoad->Subject->find('list');
		$employees = $this->FacultyLoad->Employee->find('list');
		$sections = $this->FacultyLoad->Section->find('list');
		$this->set(compact('subjects', 'employees', 'sections'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for faculty load', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FacultyLoad->delete($id)) {
			$this->Session->setFlash(__('Faculty load deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Faculty load was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function api(){
		$data  = $this->FacultyLoad->find('all');
		echo json_encode($data);
		exit;
	}
}
