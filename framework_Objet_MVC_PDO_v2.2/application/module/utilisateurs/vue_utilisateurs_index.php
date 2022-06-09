    <h2>utilisateurs</h2>
    <p><a class="btn btn-primary" href="<?=hlien("utilisateurs","edit","id",0)?>">Nouveau utilisateurs</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Email</th>
			<th>Mdp</th>
			<th>Profil</th>
				<th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $data as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['uti_id'])?></td>
			<td><?=mhe($row['uti_nom'])?></td>
			<td><?=mhe($row['uti_prenom'])?></td>
			<td><?=mhe($row['uti_email'])?></td>
			<td><?=mhe($row['uti_mdp'])?></td>
			<td><?=mhe($row['uti_profil'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("utilisateurs","edit","id",$row["uti_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("utilisateurs","del","id",$row["uti_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>