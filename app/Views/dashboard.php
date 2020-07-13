<div class="col-sm-12">
</div>
	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th>Id</th>
				<th>Firstname</th>
				<th>Email</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $row): ?>
			<tr>
			<td><?= $row['id'];?></td>
			<td><?= $row['firstname'];?></td>
			<td><?= $row['email'];?></td>
			<td>
				<a href="/Dashboard/edit/<?= $row['id'];?>" class="btn btn-warning">Edit</a>
				<a href="/Dashboard/delete/<?= $row['id'];?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin untuk menghapus data...?')">Delete</a>
			</td>
		   </tr>
		<?php endforeach;?>
		</tbody>
	</table>
</div>
