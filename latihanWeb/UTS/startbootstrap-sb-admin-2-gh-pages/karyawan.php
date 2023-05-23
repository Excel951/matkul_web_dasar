<?php

use function PHPSTORM_META\type;

include "./connection.php";

$querySQL = "select * from karyawan";
$hasil = mysqli_query($conn, $querySQL);

?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800" id="headingIndex">
		Karyawan
	</h1>
	<button id="btnAddKaryawan" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-bs-toggle="modal" data-bs-target="#modalTambahBarang">
		<i class="fa fa-plus" aria-hidden="true"></i>
		Tambah Karyawan
	</button>
</div>

<!-- Page Content -->
<div class="card shadow mb-4">
	<div class="card-body">
		<div class="table-responsive">
			<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap5">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Kode Karyawan</th>
								<th>Nama Karyawan</th>
								<th>Jabatan</th>
								<th>Telepon</th>
								<th>Email</th>
								<th>Action</th>
							</tr>
						</thead>
						<tfoot></tfoot>
						<tbody>
							<?php
							if (mysqli_num_rows($hasil) > 0) {
								while ($isi = mysqli_fetch_assoc($hasil)) {
									echo "<tr>";
									echo "<td>";
									echo $isi["kode_karyawan"];
									echo "</td>";
									echo "<td>";
									echo $isi["nama"];
									echo "</td>";
									echo "<td>";
									echo $isi["jabatan"];
									echo "</td>";
									echo "<td>";
									echo $isi["telepon"];
									echo "</td>";
									echo "<td>";
									echo $isi["email"];
									echo "</td>";
									echo "<td>";
									echo '<button class="btn btn-info update" data-bs-toggle="modal" data-bs-target="#modalTambahBarang">U</button>';
									echo "</td>";
									echo "</tr>";
								}
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Tambah Barang -->
<div class="modal fade" id="modalTambahBarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header" id="staticBackdropLabel">
				<h1>Tambah Karyawan</h1>
			</div>
			<!-- <form action="" method="post" autocomplete="on"> -->
			<div class="modal-body">
				<div class="mb-3">
					<label for="kode" class="form-label input-group">Kode Barang:
					</label>
					<input type="text" name="kode" id="kode" class="form-control input-group" placeholder="1234" />
				</div>
				<div class="mb-3">
					<label for="nama" class="form-label input-group">Nama Karyawan:
					</label>
					<input type="text" name="nama" id="nama" class="form-control input-group" placeholder="Komputer" />
				</div>
				<div class="mb-3">
					<label for="jabatan" class="form-label input-group">Jabatan:</label>
					<!-- <input type="text" name="jabatan" id="jabatan" class="form-control input-group" placeholder="pcs" /> -->
					<select name="jabatan" id="jabatan" class="form-select animated--grow-in">
						<option value="null">Pilih Jabatan</option>
						<option value="Operator">Operator</option>
						<option value="Manajer">Manajer</option>
						<option value="Admin">Admin</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="telepon" class="form-label input-group">Telepon:</label>
					<input type="tel" name="telepon" id="telepon" class="form-control input-group" placeholder="1000" />
				</div>
				<div class="mb-3">
					<label for="email" class="form-label input-group">Email:</label>
					<input type="text" name="email" id="email" class="form-control input-group" placeholder="1000" />
				</div>
				<div class="mb-3">
					<label for="password" class="form-label input-group">Password:</label>
					<input type="text" name="password" id="password" class="form-control input-group" placeholder="1000" />
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-warning" id="btnUpdateKaryawan" name="btnUpdateKaryawan" data-bs-dismiss="modal">
					Update
				</button>
				<button type="submit" class="btn btn-danger" id="btnDeleteKaryawan" name="btnDeleteKaryawan" data-bs-dismiss="modal">
					Delete
				</button>
				<button type="submit" class="btn btn-primary" id="btnSaveKaryawan" name="btnSaveKaryawan" value="btnSaveKaryawan" data-bs-dismiss="modal">
					Save
				</button>
				<button type="button" class="btn btn-secondary" id="dismissBtn" data-bs-dismiss="modal">
					Cancel
				</button>
			</div>
			<!-- </form> -->

		</div>
	</div>
</div>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

<script>
	$(document).ready(function() {
		let myModal = $('#modalTambahBarang');

		$.fn.clearform = function() {
			$(`#kode`).val("");
			$(`#nama`).val("");
			$(`#jabatan`).val("null");
			$(`#email`).val("");
			$(`#telepon`).val("");
			$(`#password`).val("");
		};

		$('#btnAddKaryawan').click(function() {
			myModal.find('h1').text('Tambah Karyawan');
			$('#btnSaveKaryawan').show();
			$('#btnUpdateKaryawan').hide();
			$('#btnDeleteKaryawan').hide();
			$('#kode').removeAttr('disabled');
		});

		$('#btnSaveKaryawan').click(function(e) {
			e.preventDefault();

			// ambil value dari kolom yang telah diisi
			let kode = $('#kode').val();
			let nama = $('#nama').val();
			let jabatan = $('#jabatan').val();
			let telepon = $('#telepon').val();
			let email = $('#email').val();
			let password = $('#password').val();

			// kirimkan value yang telah diambil ke php
			$.post('./tambahKaryawan.php', {
				kode_karyawan: kode,
				nama: nama,
				jabatan: jabatan,
				telepon: telepon,
				email: email,
				password: password
			}, function(data, status) {
				alert('Data karyawan berhasil ditambahkan');

				// untuk melakukan debuging jika terjadi masalah ketika post
				// alert(`${data} : ${status}`);

				$('#isi').load('./karyawan.php');
			});

			$.fn.clearform();
		});

		editKaryawan();

		function editKaryawan() {
			let kode, nama, jabatan, telepon, email, password;

			$('#dataTable tbody').on('click', '.update', function(e) {
				e.preventDefault();

				myModal.find('h1').text('Update Karyawan');
				$("#btnSaveKaryawan").hide();
				$("#btnUpdateKaryawan").show();
				$("#btnDeleteKaryawan").show();
				$("#kode").attr("disabled", true);

				let currentRow = $(this).closest('tr').find('td');

				// ambil value dari tabel yang dipilih
				kode = currentRow[0].innerHTML;
				console.log(kode);

				$.ajax({
					url: './searchKaryawan.php',
					type: "GET",
					dataType: "json",
					data: {
						kode: kode
					},
					success: function(data, response) {
						data = data[0];
						$("#kode").val(data.kode_karyawan);
						$("#nama").val(data.nama);
						$("#jabatan").val(data.jabatan);
						$("#telepon").val(data.telepon);
						$("#email").val(data.email);
						$("#password").val(data.password);
						// console.log(parseData);
					},
					error: function(data, response) {
						alert("Error: " + response);
						alert(data);
					}
				})
			});

			$("#btnUpdateKaryawan").click(function(e) {
				e.preventDefault();

				kode = $("#kode").val();
				nama = $("#nama").val();
				jabatan = $("#jabatan").val();
				telepon = $("#telepon").val();
				email = $("#email").val();
				password = $("#password").val();

				$.ajax({
					url: './updateKaryawan.php',
					type: 'POST',
					data: {
						kode: kode,
						nama: nama,
						jabatan: jabatan,
						telepon: telepon,
						email: email,
						password: password
					},
					success: function(data, response) {
						console.log(response + " : " + data);
						$('#isi').load('./karyawan.php');
					},
					error: function(data, response) {
						console.log(response + " : " + data);
					}
				})

				$.fn.clearform();
			})

			$("#btnDeleteKaryawan").click(function(e) {
				e.preventDefault();

				$.ajax({
					url: './deleteKaryawan.php',
					type: 'POST',
					data: {
						kode: kode
					},
					success: function(data, response) {
						console.log(response + " : " + data);
						$('#isi').load('./karyawan.php');
					},
					error: function(data, response) {
						console.log(response + " : " + data);
					}
				})

				$.fn.clearform();
			})

		}
	});
</script>