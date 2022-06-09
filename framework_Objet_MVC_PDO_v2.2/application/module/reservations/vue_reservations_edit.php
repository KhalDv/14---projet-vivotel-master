        <form method="post" action="<?=hlien("reservations","edit")?>">
		<input type="hidden" name="res_id" id="res_id" value="<?= $id ?>" />
		
                        <div class='form-group'>
                            <label for='res_client'>Client</label>
                            <input id='res_client' name='res_client' type='text' size='50' value='<?=mhe($res_client)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='res_date_creation'>Date_creation</label>
                            <input id='res_date_creation' name='res_date_creation' type='text' size='50' value='<?=mhe($res_date_creation)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='res_update'>Update</label>
                            <input id='res_update' name='res_update' type='text' size='50' value='<?=mhe($res_update)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='res_date_debut'>Date_debut</label>
                            <input id='res_date_debut' name='res_date_debut' type='text' size='50' value='<?=mhe($res_date_debut)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='res_date_fin'>Date_fin</label>
                            <input id='res_date_fin' name='res_date_fin' type='text' size='50' value='<?=mhe($res_date_fin)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='res_hotel'>Hotel</label>
                            <input id='res_hotel' name='res_hotel' type='text' size='50' value='<?=mhe($res_hotel)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='res_chambre'>Chambre</label>
                            <input id='res_chambre' name='res_chambre' type='text' size='50' value='<?=mhe($res_chambre)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='res_gestionnaire'>Gestionnaire</label>
                            <input id='res_gestionnaire' name='res_gestionnaire' type='text' size='50' value='<?=mhe($res_gestionnaire)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='res_statut'>Statut</label>
                            <input id='res_statut' name='res_statut' type='text' size='50' value='<?=mhe($res_statut)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              