    <h2>profils</h2>
    <p><a class="btn btn-primary" href="<?=hlien("profils","edit","id",0)?>">Nouveau profils</a></p>
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
			
			<td><?=mhe($row['pro_id'])?></td>
			<td><?=mhe($row['pro_nom'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("profils","edit","id",$row["pro_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("profils","del","id",$row["pro_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>