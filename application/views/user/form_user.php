<div class="row">
	<div class="col-md-6">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Email</th>
					<th>Level</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($user as $key => $value): ?>
				<tr>
					<td><?php echo $value->id_user ?></td>
					<td><?php echo $value->nama ?></td>
					<td><?php echo $value->username ?></td>
					<td><?php echo $value->email ?></td>
					<td>
						<?php 
						switch ($value->level) {
						 	case '1':
						 		echo "Admin";
						 		break;
						 	case '2':
						 		echo "Eo";
						 		break;
						 	case '3':
						 		echo "Member";
						 		break;
						 	default:
						 		# code...
						 		break;
						 } ?>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>	
	</div>
</div>