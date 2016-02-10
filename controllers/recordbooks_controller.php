<?php
class RecordbooksController extends AppController {

	var $name = 'Recordbooks';
	var $uses = array('Recordbook','MeasurableItem','Template');

	function index() {
		$this->Recordbook->recursive = 0;
		$this->set('recordbooks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid recordbook', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('recordbook', $this->Recordbook->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Recordbook->create();
			if ($this->Recordbook->save($this->data)) {
				$this->Session->setFlash(__('The recordbook has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recordbook could not be saved. Please, try again.', true));
			}
		}
		$facultyLoads = $this->Recordbook->FacultyLoad->find('list');
		$templates = $this->Recordbook->Template->find('list');
		$this->set(compact('facultyLoads', 'templates'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid recordbook', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Recordbook->save($this->data)) {
				$this->Session->setFlash(__('The recordbook has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recordbook could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Recordbook->read(null, $id);
		}
		$facultyLoads = $this->Recordbook->FacultyLoad->find('list');
		$templates = $this->Recordbook->Template->find('list');
		$this->set(compact('facultyLoads', 'templates'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for recordbook', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Recordbook->delete($id)) {
			$this->Session->setFlash(__('Recordbook deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Recordbook was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function create(){
		$faculty_load_id = $this->data['Recordbook']['faculty_load_id'] = $this->data['FacultyLoadId'];
		$period_id = $this->data['Recordbook']['period_id'] = $this->data['ActivePeriod'];
		
		$response = $this->Recordbook->find('first',array('conditions'=>array(
													'Recordbook.faculty_load_id'=>$faculty_load_id,
													'Recordbook.period_id'=>$period_id,
													))
												);
		
		if(empty($response)){
			$this->Recordbook->save($this->data['Recordbook']);
			$response = $this->Recordbook->findById($this->Recordbook->id);
		}
		
		echo json_encode($response);
		exit;
	}
	
	function template(){
		//CREATING TEMPLATE DETAILS DATA FOR QUERYING AND SAVING PURPOSES
		$recordbookId = $data['Recordbook']['id'] = $this->data['RecordbookId'];
		$templateId = $data['Recordbook']['template_id'] = $this->data['TemplateId'];
		//$periodId = $data['RecordbookDetail']['period_id'] = $this->data['PeriodId'];
		
		
		//FINDING RECORDBOOK DETAILS
		$result = $this->Recordbook->RecordbookDetail->find('first',array('conditions'=>array('RecordbookDetail.recordbook_id'=>$recordbookId)));
																		
		//SAVE NEW RECORDBOOK DETAILS IF RECORDBOOK HAS NOT YET HAVE R.DETAILS
		if(empty($result)){
			$template = $this->Template->find('first',array('conditions'=>array('Template.id'=>$templateId)));
			
			foreach($template['TemplateDetail'] as $k => $d){
				unset($d['id']);//remove template detail id
				unset($d['template_id']);//
				$data['RecordbookDetail'][$k] = $d;
				$data['RecordbookDetail'][$k]['recordbook_id'] = $recordbookId;
			}
			$this->Recordbook->saveAll($data);
		}
		
		//OPENING RECORDBOOK (NOW WITH COMPLETE HEADER & DETAILS DATA)
		$this->Recordbook->recursive = 2;
		$recordbook = $this->Recordbook->findbyId($recordbookId); //$this->Recordbook->open($recordbookId);

		
		//DATA FOR TOTAL COLUMN ON RECORDBOOK
		$total = array('MeasurableItem'=>
						array(	"header" => "Total",
								"is_item"=>false,
								"is_abbrev"=>false
							));	
							
		//DATA FOR PERFECT SCORE COLUMN ON RECORDBOOK
		$ps = array('MeasurableItem'=>
				array(	"header" => "P.S",
						"tooltip"=> "Perfect Score",
						"is_item"=>false,
						"is_abbrev"=>true
					));
					
		//DATA FOR WEIGHTED SCORE COLUMN ON RECORDBOOK
		$ws = array('MeasurableItem'=>
				array(	"header"=> "W.S",
						"tooltip"=> "Weighted Score",
						"is_item"=>false,
						"is_abbrev"=>true,
					));
		//NOTE: EACH COMPONENTS HAS 3 ADDITONAL COLUMN NAMELY: TOTAL,PERFECT SCORE, & WEIGHTED SCORE COLUMN
				
		$measurables  = array(); //DECLARING MEASURABLES
		foreach($recordbook['RecordbookDetail'] as $k=>$r){
			//FIND COMPONENT'S MEASURABLE ITEMS
			if(isset($this->data['SelectedAction'])){
				if($this->data['SelectedAction'] == 'BlankTemp'){
					$mi = $this->MeasurableItem->find('all',array(
													'recursive'=>-1,
													'conditions'=>array(
															'MeasurableItem.general_component_id'=>$r['general_component_id'],
															'MeasurableItem.recordbook_detail_id'=>$r['id'],
														),
													));
				}else if($this->data['SelectedAction'] == 'CopyFrom'){

				}
			}else{
				$mi = $this->MeasurableItem->find('all',array(
													'recursive'=>-1,
													'conditions'=>array(
															'MeasurableItem.general_component_id'=>$r['general_component_id'],
															'MeasurableItem.recordbook_detail_id'=>$r['id'],
														),
													));
			}
	
			//ADD ONE MEASURABLE ITEM ON AN EMPTY COMPONENT
			if(empty($mi)){
				$mi = array(
					 '0' => array(
						'MeasurableItem' => array(
							'general_component_id' => $r['general_component_id'],
							'header' => 'DFLT',
							'perfect_score' => '0',
							'percentage' => '0',
							'base' => '0',
							'is_item' => true,
							'recordbook_detail_id' => $r['id'],
						)
					));
			}
			//NOTE: EACH COMPONENTS MUST ATLEAST HAVE ONE ITEM (is_item must set to TRUE)
			
			
			//ADDING REQUIRED FIELD ON EVERY COMPONENTS
			array_push($mi,$total);
			array_push($mi,$ps);
			array_push($mi,$ws);
			
			//MERGE COMPONENT'S ITEMS
			$measurables = array_merge($measurables,$mi);
			
			//COUNT COMPONENT MEASURABLE ITEMS //USE FOR TABLE HEADER COLSPAN
			$recordbook['RecordbookDetail'][$k]['item_count'] = count($mi);
			$recordbook['RecordbookDetail'][$k]['MeasurableItem'] = $mi;
			unset($mi);
		}
		
		//PASSING DATA FOR THE INTERFACE
		$data = array();
		$data['Template']['id'] = $templateId;
		$data['components'] = $recordbook['RecordbookDetail'];
		$data['measurables'] = $measurables;
		echo json_encode($data);
		exit;
	}
	
	function create_items(){
		$data = array();
		foreach($this->data as $k => $d){
			if($d['MeasurableItem']['is_item'] == 'true' || $d['MeasurableItem']['is_item'] == 1){
				array_push($data,$d);
			}else{
				unset($this->data[$k]);
			}
		}
		
		if($this->MeasurableItem->saveAll($data)){
			pr('Measurable item(s) has been saved');exit;
		}
		pr('No Item To Save');exit;
	}
	
}
