    <h2>chambres</h2>
    <p><a class="btn btn-primary" href="<?=hlien("chambres","edit","id",0)?>">Nouveau chambres</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Description</th>
			<th>Categorie</th>
			<th>Surface</th>
			<th>Lit</th>
			<th>Jacouzzi</th>
			<th>Balcon</th>
			<th>Wifi</th>
			<th>Minibar</th>
			<th>Coffre</th>
				<th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $data as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['cha_id'])?></td>
			<td><?=mhe($row['cha_description'])?></td>
			<td><?=mhe($row['cha_categorie'])?></td>
			<td><?=mhe($row['cha_surface'])?></td>
			<td><?=mhe($row['cha_lit'])?></td>
			<td><?=mhe($row['cha_jacouzzi'])?></td>
			<td><?=mhe($row['cha_balcon'])?></td>
			<td><?=mhe($row['cha_wifi'])?></td>
			<td><?=mhe($row['cha_minibar'])?></td>
			<td><?=mhe($row['cha_coffre'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("chambres","edit","id",$row["cha_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("chambres","del","id",$row["cha_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>