        <form method="post" action="<?=hlien("hotels","edit")?>">
		<input type="hidden" name="hot_id" id="hot_id" value="<?= $id ?>" />
		
                        <div class='form-group'>
                            <label for='hot_nom'>Nom</label>
                            <input id='hot_nom' name='hot_nom' type='text' size='50' value='<?=mhe($hot_nom)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='hot_adresse'>Adresse</label>
                            <input id='hot_adresse' name='hot_adresse' type='text' size='50' value='<?=mhe($hot_adresse)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='hot_tel'>Tel</label>
                            <input id='hot_tel' name='hot_tel' type='text' size='50' value='<?=mhe($hot_tel)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='hot_departement'>Departement</label>
                            <input id='hot_departement' name='hot_departement' type='text' size='50' value='<?=mhe($hot_departement)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='hot_classe'>Classe</label>
                            <input id='hot_classe' name='hot_classe' type='text' size='50' value='<?=mhe($hot_classe)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='hot_gerant'>Gerant</label>
                            <input id='hot_gerant' name='hot_gerant' type='text' size='50' value='<?=mhe($hot_gerant)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              