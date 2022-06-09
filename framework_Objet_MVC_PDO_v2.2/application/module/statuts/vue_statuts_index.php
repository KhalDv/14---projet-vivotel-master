    <h2>statuts</h2>
    <p><a class="btn btn-primary" href="<?=hlien("statuts","edit","id",0)?>">Nouveau statuts</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Nom</th>
				<th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $data as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['sta_id'])?></td>
			<td><?=mhe($row['sta_nom'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("statuts","edit","id",$row["sta_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("statuts","del","id",$row["sta_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>