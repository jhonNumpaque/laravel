<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo AJAX</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				Usuarios
			</div>
			<div class="panel-body">
				<table class="table tablet-striped">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>
					</thead>
					<tbody>
						@foreach($users as $user)
							<tr id="row-{{ $user->id }}">
								<td>{{ $user->id }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>
									<button class="btn btn-danger" id="delete-button" onclick="deleteUser({{ $user->id }})">Eliminar</button>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				<div class="text-center"> {!! $users->render() !!} </div>
			</div>
		</div>
	</div>
	<div class="col-md-2"></div>
	
	<script src="{{ asset('plugins/jquery/jquery-2.2.1.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/ajax/users.js') }}"></script>
</body>
</html>
