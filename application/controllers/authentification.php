<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of authentification
 * Controleur par defaut
 * Permet le cration d'utilisateurs
 * Permet la connexion des utilisateurs
 *
 * @author Boudi-Hunter
 */
class authentification extends CI_Controller {

function __construct()
	{
		parent::__construct();
                $this->load->library('session');            
                $this->load->database();           
                $this->load->helper(array('form'));
        }
    function  index()
    
    {
         
        $this->load->library('form_validation');
        $this->form_validation->set_rules('clt_email', 'Email Address', 'valid_email|required');
        $this->form_validation->set_rules('clt_motPasse', 'Password', 'required|min_length[4]');

      if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('authentification/connexion');
		}
		else
		{
			$this->load->view('accueil');
		}
      

    }
    function create_user ()
    {
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('clt_code', 'Clt_code', 'required');
        $this->form_validation->set_rules('clt_nom', 'Clt_nom', 'required');
        $this->form_validation->set_rules('clt_adresse', 'Clt_adresse', 'required');
        $this->form_validation->set_rules('clt_tel', 'Clt_tel', 'required');
        $this->form_validation->set_rules('clt_email', 'Email Address', 'valid_email|required');
        $this->form_validation->set_rules('clt_motPasse', 'Password', 'required|min_length[4]');

      if ( $this->form_validation->run() !== false ) {

         $this->load->model('creation_user_model');
         $res = $this
                  ->creation_user_model
                  ->index(
                     $this->input->post('clt_code'),
                     $this->input->post('clt_nom'),
                     $this->input->post('clt_adresse'),
                     $this->input->post('clt_tel'),
                     $this->input->post('clt_email'),
                     $this->input->post('clt_motPasse')
                  );

         if ( $res == true ) {
            $_SESSION['clt_email'] = $this->input->post('clt_email');
            echo"Creation reussis, connectez vous maintenant";
            redirect('authentification/connexion');
         }
      }
         $this->load->view('authentification/inscription');

    }
     
     function deconnexion ()
     {
         $this->session->sess_destroy();
         $this->load->view('accueil');

     }

}


/* End of file authentification.php */
/* Location: ./application/controllers/authentification.php */
