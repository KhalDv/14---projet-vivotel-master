    <h2>reservations</h2>
    <p><a class="btn btn-primary" href="<?=hlien("reservations","edit","id",0)?>">Nouveau reservations</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Client</th>
			<th>Date_creation</th>
			<th>Update</th>
			<th>Date_debut</th>
			<th>Date_fin</th>
			<th>Hotel</th>
			<th>Chambre</th>
			<th>Gestionnaire</th>
			<th>Statut</th>
				<th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $data as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['res_id'])?></td>
			<td><?=mhe($row['res_client'])?></td>
			<td><?=mhe($row['res_date_creation'])?></td>
			<td><?=mhe($row['res_update'])?></td>
			<td><?=mhe($row['res_date_debut'])?></td>
			<td><?=mhe($row['res_date_fin'])?></td>
			<td><?=mhe($row['res_hotel'])?></td>
			<td><?=mhe($row['res_chambre'])?></td>
			<td><?=mhe($row['res_gestionnaire'])?></td>
			<td><?=mhe($row['res_statut'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("reservations","edit","id",$row["res_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("reservations","del","id",$row["res_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>