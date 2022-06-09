    <h2>offre</h2>
    <p><a class="btn btn-primary" href="<?=hlien("offre","edit","id",0)?>">Nouveau offre</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Hotel</th>
			<th>Services</th>
			<th>Prix</th>
				<th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $data as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['off_id'])?></td>
			<td><?=mhe($row['off_hotel'])?></td>
			<td><?=mhe($row['off_services'])?></td>
			<td><?=mhe($row['off_prix'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("offre","edit","id",$row["off_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("offre","del","id",$row["off_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>