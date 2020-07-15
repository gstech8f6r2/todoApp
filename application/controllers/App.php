<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// class App e nome file App.php devono coincidere
class App extends CI_Controller {

  function index(){
    echo "Ciao Giacomo! questa e una funzione di default chiamata index!!";
    $data['todos']= $this->model->read_todos();
    $this->load->view('list',$data);
  }

  function new_todo(){
    // form torna dati o vuoto?
    $this->load->library('form_validation');
  // form_validation --------- parametri('nome campo','user friendly ','regole campo imput')
    $this->form_validation->set_rules('todo','Todo Text di placeholder per codeigniter','trim|required');
    if ($this->form_validation->run() == FALSE) {
      // FAILED
      redirect('app');
      
    }else {
      //OK
      $data = array(
        'text' => $this->input->post('todo'),
        'createdAt' => date('Y-m-d H:i:s')
      );

      $this->model->create_todo($data);

      redirect('app');
    }
  }

  function anotherfunction(){
    echo "Hello world from page two! chiamata da anotherfunction()";
  }



}
