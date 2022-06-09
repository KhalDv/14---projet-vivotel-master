    <h2>lits</h2>
    <p><a class="btn btn-primary" href="<?=hlien("lits","edit","id",0)?>">Nouveau lits</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Type</th>
				<th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $data as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['lit_id'])?></td>
			<td><?=mhe($row['lit_type'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("lits","edit","id",$row["lit_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("lits","del","id",$row["lit_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>