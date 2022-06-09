        <form method="post" action="<?=hlien("statuts","edit")?>">
		<input type="hidden" name="sta_id" id="sta_id" value="<?= $id ?>" />
		
                        <div class='form-group'>
                            <label for='sta_nom'>Nom</label>
                            <input id='sta_nom' name='sta_nom' type='text' size='50' value='<?=mhe($sta_nom)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              