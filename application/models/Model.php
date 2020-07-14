<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

// CRUD

// C create

// R Read

function read_todos(){
  $query= $this->db->query('SELECT * FROM todo');

  if ($query->num_rows() > 0) {
    foreach ($$query->result() as $row) {
      $data[] = $row;
    }

    return $data;
  }
}

//U Update

// D Delete

}
