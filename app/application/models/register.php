<?php 

class Register extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function save_student_data()
    {
		  $data['name']= $this->input->post('name');		 
		  $data['gender']= $this->input->post('gender');
		  $data['rollnum']= $this->input->post('rollnum');
		  $data['regnum']= $this->input->post('regnum');
		  $data['fathersname']= $this->input->post('fathersname');
		  $data['mothersname']= $this->input->post('mothersname');
		  $data['address']= $this->input->post('address');
		  $data['phone']= $this->input->post('phone');
		  $data['email']= $this->input->post('email');
		  $data['currentyear']= $this->input->post('currentyear');
		  $data['batch']= $this->input->post('batch');
		  $data['department']= $this->input->post('department');
		  $data['subject1']= $this->input->post('subject1');
		  $data['subject2']= $this->input->post('subject2');
		  $data['subject3']= $this->input->post('subject3');
		  $data['subject4']= $this->input->post('subject4');
		  $data['subject5']= $this->input->post('subject5');
		  $data['subject6']= $this->input->post('subject6');
		  $data['subject7']= $this->input->post('subject7');
		  
        $this->db->insert('registered_students',$data);
        
        return TRUE;
    }

	function save_faculty_data()
    {
		  $data['name']= $this->input->post('name');		 
		  $data['gender']= $this->input->post('gender');
		  $data['regnum']= $this->input->post('regnum');
		  $data['fathersname']= $this->input->post('fathersname');
		  $data['mothersname']= $this->input->post('mothersname');
		  $data['address']= $this->input->post('address');
		  $data['phone']= $this->input->post('phone');
		  $data['email']= $this->input->post('email');
		  $data['subject1']= $this->input->post('subject1');
		  $data['subject2']= $this->input->post('subject2');
		  $data['subject3']= $this->input->post('subject3');
		  $data['subject4']= $this->input->post('subject4');
		  $data['subject5']= $this->input->post('subject5');
		 
		  
        $this->db->insert('registered_faculty',$data);
        
        return TRUE;
    }


    function insert_entry()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}