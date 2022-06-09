    <h2>departements</h2>
    <p><a class="btn btn-primary" href="<?=hlien("departements","edit","id",0)?>">Nouveau departements</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Nom</th>
			<th>Code</th>
				<th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $data as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['dep_id'])?></td>
			<td><?=mhe($row['dep_nom'])?></td>
			<td><?=mhe($row['dep_code'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("departements","edit","id",$row["dep_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("departements","del","id",$row["dep_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>