<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of accueil
 *
 * @author Boudi-Hunter
 */
class accueil extends CI_Controller{

   
   public function index()
	{
		$this->load->view('accueil');
	}
}
