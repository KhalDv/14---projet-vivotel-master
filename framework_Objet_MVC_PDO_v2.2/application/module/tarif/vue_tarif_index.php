    <h2>tarif</h2>
    <p><a class="btn btn-primary" href="<?=hlien("tarif","edit","id",0)?>">Nouveau tarif</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Classe</th>
			<th>Categorie</th>
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
			
			<td><?=mhe($row['tar_id'])?></td>
			<td><?=mhe($row['tar_classe'])?></td>
			<td><?=mhe($row['tar_categorie'])?></td>
			<td><?=mhe($row['tar_prix'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("tarif","edit","id",$row["tar_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("tarif","del","id",$row["tar_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>