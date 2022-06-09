        <form method="post" action="<?=hlien("utilisateurs","edit")?>">
		<input type="hidden" name="uti_id" id="uti_id" value="<?= $id ?>" />
		
                        <div class='form-group'>
                            <label for='uti_nom'>Nom</label>
                            <input id='uti_nom' name='uti_nom' type='text' size='50' value='<?=mhe($uti_nom)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='uti_prenom'>Prenom</label>
                            <input id='uti_prenom' name='uti_prenom' type='text' size='50' value='<?=mhe($uti_prenom)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='uti_email'>Email</label>
                            <input id='uti_email' name='uti_email' type='text' size='50' value='<?=mhe($uti_email)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='uti_mdp'>Mdp</label>
                            <input id='uti_mdp' name='uti_mdp' type='text' size='50' value='<?=mhe($uti_mdp)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='uti_profil'>Profil</label>
                            <input id='uti_profil' name='uti_profil' type='text' size='50' value='<?=mhe($uti_profil)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              