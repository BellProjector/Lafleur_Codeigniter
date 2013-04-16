<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Boudi-hunter
* Description: Classe de modele de connexion
*/
class login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

     public function index($code, $nom, $adresse, $tel, $email, $password)
   {
       $this->db->set('clt_code',$code);
       $this->db->set('clt_nom',$nom);
       $this->db->set('clt_adresse',$adresse);
       $this->db->set('clt_tel',$tel);
       $this->db->set('clt_email',$email);
       $this->db->set('clt_motPasse',$password);
       $this->db->insert('clientconnu');
   
   }
   }