<?php
class Model_SubjectClassMap extends Model_Table {
	public $table="subject_class_map";
	function init(){
		parent::init();
		
		$this->hasOne('Class','class_id');
		$this->hasOne('Subject','subject_id');
                $this->hasOne('Session_Current','session_id');
                $this->addCondition('session_id',$this->add('Model_Session_Current')->dsql()->field('id')->getOne());
	}
}