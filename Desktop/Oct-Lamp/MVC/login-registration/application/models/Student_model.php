<?php

class Student_model extends CI_Model {
   function get_student_by_email($email,$password)
   { 
       return $this->db->query("SELECT * FROM users WHERE email = ? AND password = ?", array($email,$password))
                         ->row_array();
   }

   function register_student($data){
   	$sql= "INSERT INTO users (`first_name`,
   			`last_name`,
   			`email`,
   			`password`) VALUES (?,?,?,?)";

   	$this->db->query($sql, array(
   		$data['first_name'],
   		$data['last_name'],
   		$data['email'],
   		$data['password']));
   
   $sql = "SELECT id FROM users where first_name = ? AND last_name = ? AND email = ? AND password = ?";
   return $this->db->query($sql, 
      Array($data['first_name'],$data['last_name'],$data['email'], 
        $data['password']))->row_array();

 }
    // RETURN YOUR INSERT ID. ALSO LOOK IT UP.
}



