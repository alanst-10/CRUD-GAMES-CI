<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>

	<link rel="stylesheet" href="https://getbootstrap.com/docs/4.4/examples/dashboard/dashboard.css">
	<script src="https://kit.fontawesome.com/2a33fe9a00.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					<h1 class="h2">Dashboard</h1>
					<div class="btn-toolbar mb-2 mb-md-0">
						<div class="btn-group mr-2">
							<a href="<?= base_url() ?>games/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Game</a>
						</div>
					</div>
				</div>

				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					<h2 class="h2">Last 5 Games</h2>
				</div>

				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Price</th>
								<th>Developer</th>
								<th>Release Date</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($games as $game) : ?>
								<tr>
									<td><?= $game['id'] ?></td>
									<td><?= $game['name'] ?></td>
									<td><?= $game['price'] ?></td>
									<td><?= $game['developer'] ?></td>
									<td><?= $game['release_date'] ?></td>
									<td style="display: flex; justify-content: space-around;">
										<a href="<?= base_url() ?>games/edit/<?= $game['id'] ?>" class="btn btn-info" title="Edit"><i class="fa fa-pencil-alt"></i></a>
										<a href="javascript:goDelete(<?= $game['id'] ?>)" class="btn btn-danger" title="Delete"><i class="fa fa-trash-alt"></i></a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>

				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					<h2 class="h2">Last 5 Users</h2>
				</div>

				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Email</th>
								<th>Country</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($users as $user) :?>
								<tr>
									<td><?= $user['id'] ?></td>
									<td><?= $user['name'] ?></td>
									<td><?= $user['email'] ?></td>
									<td><?= $user['country'] ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</main>



		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script>
		function goDelete(id) {
			var myUrl = 'games/delete/' + id;
			if (confirm("Deseja realmente deletar esse game?")) {
				window.location.href = myUrl;
			} else {
				alert("Nenhum registro alterado!");
				return false;
			}
		}
	</script>
</body>

</html>