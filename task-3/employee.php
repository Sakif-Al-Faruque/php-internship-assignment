<?php 
class Employee{
    private $emp_id;
    private $emp_name;
    private $emp_contact;

    public function set_emp_id($emp_id){
        $this->emp_id = $emp_id;
    }
    public function set_emp_name($emp_name){
        $this->emp_name = $emp_name;
    }
    public function set_emp_contact($emp_contact){
        $this->emp_contact = $emp_contact;
    }

    public function get_emp_id(){
        return $this->emp_id;
    }
    public function get_emp_name(){
        return $this->emp_name;
    }
    public function get_emp_contact(){
        return $this->emp_contact;
    }
}
?>