<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf=8">
		<meta name="viewport" content="width = device-width, initial-scale=1.0">
		<title></title>
	</head>
	<body>
		<table border=1>
			<thead>
				<tr>
					<th>User ID</th>
					<th>Firstname</th>
					<th>Email</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($user as $row);?>
				<tr>
					<td><? $row['id'];?></td>
					<td><? $row['firstname'];?></td>
					<td><? $row['email'];?></td>
					<td><a href="/Users/edit/<?= $row['id'];?>"></a></td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</body>
	</html>