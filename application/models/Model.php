<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

// CRUD

// C create

// R Read

function read_todos(){

  $this->db->select('*');
  $this->db->from('todo');
  $query= $this->db->get();

  if ($query->num_rows() > 0) {
    foreach ($query->result() as $row) {
      $data[] = $row;
    }

    return $data;
  }
}

function read_todo($id){
  $this->db->select('*');
  $this->db->from('todo');
  $this->db->where('id',$id);
  $query= $this->db->get()->result();
  return $query[0];
}

//U Update

// D Delete

}
