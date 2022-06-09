        <form method="post" action="<?=hlien("classes","edit")?>">
		<input type="hidden" name="cla_id" id="cla_id" value="<?= $id ?>" />
		
                        <div class='form-group'>
                            <label for='cla_nom'>Nom</label>
                            <input id='cla_nom' name='cla_nom' type='text' size='50' value='<?=mhe($cla_nom)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              