    <h2>hotels</h2>
    <p><a class="btn btn-primary" href="<?=hlien("hotels","edit","id",0)?>">Nouveau hotels</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Nom</th>
			<th>Adresse</th>
			<th>Tel</th>
			<th>Departement</th>
			<th>Classe</th>
			<th>Gerant</th>
				<th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $data as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['hot_id'])?></td>
			<td><?=mhe($row['hot_nom'])?></td>
			<td><?=mhe($row['hot_adresse'])?></td>
			<td><?=mhe($row['hot_tel'])?></td>
			<td><?=mhe($row['hot_departement'])?></td>
			<td><?=mhe($row['hot_classe'])?></td>
			<td><?=mhe($row['hot_gerant'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("hotels","edit","id",$row["hot_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("hotels","del","id",$row["hot_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>