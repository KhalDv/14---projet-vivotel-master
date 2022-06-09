        <form method="post" action="<?=hlien("offre","edit")?>">
		<input type="hidden" name="off_id" id="off_id" value="<?= $id ?>" />
		
                        <div class='form-group'>
                            <label for='off_hotel'>Hotel</label>
                            <input id='off_hotel' name='off_hotel' type='text' size='50' value='<?=mhe($off_hotel)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='off_services'>Services</label>
                            <input id='off_services' name='off_services' type='text' size='50' value='<?=mhe($off_services)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='off_prix'>Prix</label>
                            <input id='off_prix' name='off_prix' type='text' size='50' value='<?=mhe($off_prix)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              