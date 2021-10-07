<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>



	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

	<div class="container">
		<div class="card">
			<div class="card-header">
				<button type="button" onclick="buka()" class="btn btn-primary btn-sm">
					ADD
				</button>
			</div>
			<div class="card-body">
				<div id="isitabel">

				</div>
			</div>
		</div>
	</div>


	<!-- The Modal -->
	<div class="modal" id="Forminput">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Data User</h4>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<div class="form-group">
						<label for="">Nama</label>
						<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" name="username" id="username" class="form-control" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="text" name="password" id="password" class="form-control" placeholder="Password">
					</div>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" onclick="simpan()" class="btn btn-success" data-dismiss="modal">Save</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>



	<script>
		$(document).ready(function() {
			$('#isitabel').load('datatable.php')

		})

		function buka() {
			$('#Forminput').modal('show');
		}

		function simpan() {
			var nama = $('#nama').val();
			var username = $('#username').val();
			var password = $('#password').val();
			// proses ajax
			$.ajax({
				url: 'simpan.php',
				type: 'POST',
				dataType: 'JSON',
				data: {
					'nama': nama,
					'username': username,
					'password': password
				},
				success: function($data) {
					console.log($data);
					if ($data.pesan == 'berhasil') {
						kosong();
					}
					// alert('berhasil');
				}
			});
		}


		function kosong() {
			$('#nama').val('');
			$('#username').val('');
			$('#password').val('');
			$('#Forminput').modal('hide');
		}
	</script>

</body>

</html>

</body>

</html>