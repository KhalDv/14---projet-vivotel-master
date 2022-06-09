<?php
/**
Controleur créé par le générateur.
Controleur associé à une table (implémente le CRUD)
*/
class Ctr_utilisateurs extends Ctr_controleur {

    public function __construct($action) {
        parent::__construct("utilisateurs", $action);        
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$u=new Utilisateurs();
		$data=$u->selectAll();
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		if (isset($_POST["btSubmit"])) {
			$u=new Utilisateurs();
			$u->save($_POST);
			if ($_POST["uti_id"]==0)
				$_SESSION["message"][]="Le nouvel enregistrement Utilisateurs a bien été créé.";
			else
				$_SESSION["message"][]="L'enregistrement Utilisateurs a bien été mis à jour.";
			header("location:" . hlien("utilisateurs"));
		} else {				
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$u=new Utilisateurs();
			if ($id>0)
				$row=$u->select($id);
			else
				$row=$u->emptyRecord();
				
			extract($row);	
			require $this->gabarit;
		}
	}
	

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			$u=new Utilisateurs();
			$u->delete($_GET["id"]);
			$_SESSION["message"][]="L'enregistrement Utilisateurs a bien été supprimé.";
		}
		header("location:" . hlien("utilisateurs"));
	}
}

?>