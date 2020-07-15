<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// class App e nome file App.php devono coincidere
class App extends CI_Controller {

  function index(){
    echo "Ciao Giacomo! questa e una funzione di default chiamata index!!";
    $this->load->view('list');

  }

  function anotherfunction(){
    echo "Hello world from page two! chiamata da anotherfunction()";
  }



}
