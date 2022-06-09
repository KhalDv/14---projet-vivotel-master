    <h2>categories</h2>
    <p><a class="btn btn-primary" href="<?=hlien("categories","edit","id",0)?>">Nouveau categories</a></p>
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
			
			<td><?=mhe($row['cat_id'])?></td>
			<td><?=mhe($row['cat_nom'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("categories","edit","id",$row["cat_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("categories","del","id",$row["cat_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>