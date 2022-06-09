        <form method="post" action="<?=hlien("chambres","edit")?>">
		<input type="hidden" name="cha_id" id="cha_id" value="<?= $id ?>" />
		
                        <div class='form-group'>
                            <label for='cha_description'>Description</label>
                            <input id='cha_description' name='cha_description' type='text' size='50' value='<?=mhe($cha_description)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_categorie'>Categorie</label>
                            <input id='cha_categorie' name='cha_categorie' type='text' size='50' value='<?=mhe($cha_categorie)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_surface'>Surface</label>
                            <input id='cha_surface' name='cha_surface' type='text' size='50' value='<?=mhe($cha_surface)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_lit'>Lit</label>
                            <input id='cha_lit' name='cha_lit' type='text' size='50' value='<?=mhe($cha_lit)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_jacouzzi'>Jacouzzi</label>
                            <input id='cha_jacouzzi' name='cha_jacouzzi' type='text' size='50' value='<?=mhe($cha_jacouzzi)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_balcon'>Balcon</label>
                            <input id='cha_balcon' name='cha_balcon' type='text' size='50' value='<?=mhe($cha_balcon)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_wifi'>Wifi</label>
                            <input id='cha_wifi' name='cha_wifi' type='text' size='50' value='<?=mhe($cha_wifi)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_minibar'>Minibar</label>
                            <input id='cha_minibar' name='cha_minibar' type='text' size='50' value='<?=mhe($cha_minibar)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_coffre'>Coffre</label>
                            <input id='cha_coffre' name='cha_coffre' type='text' size='50' value='<?=mhe($cha_coffre)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              