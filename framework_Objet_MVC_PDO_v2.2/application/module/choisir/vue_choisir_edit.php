        <form method="post" action="<?=hlien("choisir","edit")?>">
		<input type="hidden" name="cho_id" id="cho_id" value="<?= $id ?>" />
		
                        <div class='form-group'>
                            <label for='cho_services'>Services</label>
                            <input id='cho_services' name='cho_services' type='text' size='50' value='<?=mhe($cho_services)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cho_reservation'>Reservation</label>
                            <input id='cho_reservation' name='cho_reservation' type='text' size='50' value='<?=mhe($cho_reservation)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cho_quantite'>Quantite</label>
                            <input id='cho_quantite' name='cho_quantite' type='text' size='50' value='<?=mhe($cho_quantite)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              