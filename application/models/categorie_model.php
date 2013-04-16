<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Boudi-hunter
* Description: Classe de modele de connexion
*/
class categorie_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getLesCategories()
    {
      $query = $this->db->get('categorie');
      $query->result();
      $res= $query->fetchAll();
      return $res;
    }

    public function getLesProduitsDeCategorie($idCategorie)
	{
        $query = $this->db->get_where('categorie', array('cat_code' => $idCategorie));
        $query->result();
        $res= $query->fetchAll();
        return $res;
	}

        public function getLesProduitsDuTableau($desIdProduit)
	{
		$nbProduits = count($desIdProduit);
		$lesProduits=array();
		if($nbProduits != 0)
		{
			foreach($desIdProduit as $unIdProduit)
			{       $req = $this->db->get_where('produit', array('pdt_ref' => $unIdProduit));
				$res=$req->result();
				$unProduit = $res->fetch();
				$lesProduits[] = $unProduit;
			}
		}
		return $lesProduits;
	}
}