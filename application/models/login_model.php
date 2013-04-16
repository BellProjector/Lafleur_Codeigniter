<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Boudi-hunter
* Description: Classe de modele de connexion
*/
class login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

     public function verify_user($email, $password)
   {
      $q = $this
            ->db
            ->where('email', $email)
            ->where('password', sha1($password))
            ->limit(1)
            ->get('clientconnu');

      if ( $q->num_rows > 0 ) {
         // person has account with us
         return $q->row();
      }
      return false;
   }
   
   }