        <form method="post" action="<?=hlien("lits","edit")?>">
		<input type="hidden" name="lit_id" id="lit_id" value="<?= $id ?>" />
		
                        <div class='form-group'>
                            <label for='lit_type'>Type</label>
                            <input id='lit_type' name='lit_type' type='text' size='50' value='<?=mhe($lit_type)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              