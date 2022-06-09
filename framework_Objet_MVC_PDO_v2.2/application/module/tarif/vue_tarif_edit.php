        <form method="post" action="<?=hlien("tarif","edit")?>">
		<input type="hidden" name="tar_id" id="tar_id" value="<?= $id ?>" />
		
                        <div class='form-group'>
                            <label for='tar_classe'>Classe</label>
                            <input id='tar_classe' name='tar_classe' type='text' size='50' value='<?=mhe($tar_classe)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='tar_categorie'>Categorie</label>
                            <input id='tar_categorie' name='tar_categorie' type='text' size='50' value='<?=mhe($tar_categorie)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='tar_prix'>Prix</label>
                            <input id='tar_prix' name='tar_prix' type='text' size='50' value='<?=mhe($tar_prix)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              