<?php
/**
Controleur créé par le générateur.
Controleur associé à une table (implémente le CRUD)
*/
class Ctr_tarif extends Ctr_controleur {

    public function __construct($action) {
        parent::__construct("tarif", $action);        
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$u=new Tarif();
		$data=$u->selectAll();
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		if (isset($_POST["btSubmit"])) {
			$u=new Tarif();
			$u->save($_POST);
			if ($_POST["tar_id"]==0)
				$_SESSION["message"][]="Le nouvel enregistrement Tarif a bien été créé.";
			else
				$_SESSION["message"][]="L'enregistrement Tarif a bien été mis à jour.";
			header("location:" . hlien("tarif"));
		} else {				
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$u=new Tarif();
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
			$u=new Tarif();
			$u->delete($_GET["id"]);
			$_SESSION["message"][]="L'enregistrement Tarif a bien été supprimé.";
		}
		header("location:" . hlien("tarif"));
	}
}

?>