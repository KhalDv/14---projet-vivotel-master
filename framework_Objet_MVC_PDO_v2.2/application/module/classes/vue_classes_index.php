    <h2>classes</h2>
    <p><a class="btn btn-primary" href="<?=hlien("classes","edit","id",0)?>">Nouveau classes</a></p>
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
			
			<td><?=mhe($row['cla_id'])?></td>
			<td><?=mhe($row['cla_nom'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("classes","edit","id",$row["cla_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("classes","del","id",$row["cla_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>