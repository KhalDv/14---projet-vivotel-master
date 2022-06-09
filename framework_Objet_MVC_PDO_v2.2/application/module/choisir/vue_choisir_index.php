    <h2>choisir</h2>
    <p><a class="btn btn-primary" href="<?=hlien("choisir","edit","id",0)?>">Nouveau choisir</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Services</th>
			<th>Reservation</th>
			<th>Quantite</th>
				<th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $data as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['cho_id'])?></td>
			<td><?=mhe($row['cho_services'])?></td>
			<td><?=mhe($row['cho_reservation'])?></td>
			<td><?=mhe($row['cho_quantite'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("choisir","edit","id",$row["cho_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("choisir","del","id",$row["cho_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>