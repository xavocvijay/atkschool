<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Student extends Model_Table {

    var $table = 'student';

    function init() 
    {
        parent::init();
        $this->addField('roll_no')->type('int')->caption('roll number');
        $this->addField('ishostler')->type('boolean')->defaultValue(false)->caption("Is Hostler");
        $this->addField('isScholared')->type('boolean');
        $this->hasOne('Scholar','scholar_id');
        $this->hasOne('Class','class_id');
//        $this->addExpression('name',$this->dsql()->field('scholar_master.name'));
   }
}