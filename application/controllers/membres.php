    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of membres
 * Page uniquement visible que par les membres
 * @author Boudi-Hunter
 */
class membres extends CI_Controller {

    
     public function __construct()
   {
      session_start();
      parent::__construct();
   }
    private function index()
    {

        if ( isset($_SESSION['clt_email']) ) {
                     redirect('membres');
        }
        elseif (! isset($_SESSION['clt_email']))
         {
             redirect('authentification');
         }
         
     }

    

}
