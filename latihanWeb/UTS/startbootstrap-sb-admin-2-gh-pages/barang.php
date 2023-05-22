<?php
include "./connection.php";

$querySQL = "select * from barang";
$hasil = mysqli_query($conn, $querySQL);

?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800" id="headingIndex">
		Barang
	</h1>
	<button id="btnAddBarang" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-bs-toggle="modal" data-bs-target="#modalTambahBarang">
		<i class="fa fa-plus" aria-hidden="true"></i>
		Tambah Barang
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
								<th>Kode Barang</th>
								<th>Nama Barang</th>
								<th>Satuan</th>
								<th>Harga Beli</th>
								<th>Harga Jual</th>
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
									echo $isi["kode_barang"];
									echo "</td>";
									echo "<td>";
									echo $isi["nama_barang"];
									echo "</td>";
									echo "<td>";
									echo $isi["satuan"];
									echo "</td>";
									echo "<td>";
									echo $isi["harga"];
									echo "</td>";
									echo "<td>";
									echo $isi["harga_jual"];
									echo "</td>";
									echo "<td>";
									echo '<button class="btn btn-info update" data-bs-toggle="modal" data-bs-target="#modalTambahBarang">U</button>';
									// echo '<button class="btn btn-danger update" data-bs-toggle="modal" data-bs-target="#modalTambahBarang">-</button>';
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
				<h1>Tambah Barang</h1>
			</div>
			<form action="" method="post" autocomplete="on">
				<div class="modal-body">
					<div class="mb-3">
						<label for="kode" class="form-label input-group">Kode Barang:
						</label>
						<input type="text" name="kode" id="kode" class="form-control input-group" placeholder="1234" />
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label input-group">Nama Barang:
						</label>
						<input type="text" name="nama" id="nama" class="form-control input-group" placeholder="Komputer" />
					</div>
					<div class="mb-3">
						<label for="satuan" class="form-label input-group">Satuan:</label>
						<input type="text" name="satuan" id="satuan" class="form-control input-group" placeholder="pcs" />
					</div>
					<div class="mb-3">
						<label for="hargabeli" class="form-label input-group">Harga Beli:</label>
						<input type="text" name="hargabeli" id="hargabeli" class="form-control input-group" placeholder="1000" />
					</div>
					<div class="mb-3">
						<label for="hargajual" class="form-label input-group">Harga Jual:</label>
						<input type="text" name="hargajual" id="hargajual" class="form-control input-group" placeholder="1000" />
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-warning" id="btnUpdateBarang" name="btnUpdateBarang" data-bs-dismiss="modal">
						Update
					</button>
					<button type="submit" class="btn btn-danger" id="btnDeleteBarang" name="btnDeleteBarang" data-bs-dismiss="modal">
						Delete
					</button>
					<button type="submit" class="btn btn-primary" id="btnSaveBarang" name="btnSaveBarang" value="btnSaveBarang" data-bs-dismiss="modal">
						Save
					</button>
					<button type="button" class="btn btn-secondary" id="dismissBtn" data-bs-dismiss="modal">
						Cancel
					</button>
				</div>
			</form>

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
		const myModal = $("#modalTambahBarang");
		let indexUpdate;

		$("#btnAddBarang").click(function() {
			myModal.find("h1").text("Tambah Barang");
			$("#btnSaveBarang").show();
			$("#btnUpdateBarang").hide();
			$("#btnDeleteBarang").hide();
			$("#kode").removeAttr("disabled");
		});

		$("#btnSaveBarang").click(function(e) {
			e.preventDefault();

			// ambil value
			let kode = $("#kode").val();
			let nama = $("#nama").val();
			let satuan = $("#satuan").val();
			let hargabeli = $("#hargabeli").val();
			let hargajual = $("#hargajual").val();

			$.post("./simpanBarang.php", {
				kode: kode,
				nama: nama,
				satuan: satuan,
				hargabeli: hargabeli,
				hargajual: hargajual
			}, function(data, status) {
				alert("Data barang berhasil dimasukkan");
				// code dibawah digunakan untuk mendebug jika terjadi permasalahan
				// alert(data + " : " + status);
				$("#isi").load('./barang.php');
			});

			$.fn.clearform();
		});

		$.fn.updateBarang = function() {
			let el;
			let elRow;
			let elKode;
			let elNama;
			let elSat;
			let elHrgBeli;
			let elHrgJual;

			let kode = '';
			let nama = '';
			let sat = '';
			let hrgbeli = '';
			let hrgjual = '';

			$("#dataTable tbody").on("click", ".update", function(e) {
				e.preventDefault();
				myModal.find("h1").text("Update Barang");
				$("#btnSaveBarang").hide();
				$("#btnUpdateBarang").show();
				$("btnDeleteBarang").show();
				$("#kode").attr("disabled", true);
				indexUpdate = $(this).closest("tr").index();
				// console.log(indexUpdate);

				// cari tr
				console.log(indexUpdate);
				el = $("#dataTable tbody").find("tr").eq(indexUpdate);
				// console.log(el);
				elRow = el.find("td");
				// console.log(elRow);

				// ambil semua value dari cell
				kode = elRow[0].innerHTML;
				nama = elRow[1].innerHTML;
				sat = elRow[2].innerHTML;
				hrgbeli = elRow[3].innerHTML;
				hrgjual = elRow[4].innerHTML;
				console.log(kode, nama, sat, hrgbeli, hrgjual);

				// ambil modal
				const modal = $("#modalTambahBarang");

				// cari dan setting value dari form
				elKode = modal.find("#kode");
				elNama = modal.find("#nama");
				elSat = modal.find("#satuan");
				elHrgBeli = modal.find("#hargabeli");
				elHrgJual = modal.find("#hargajual");

				elKode.val(kode);
				elNama.val(nama);
				elSat.val(sat);
				elHrgBeli.val(hrgbeli);
				elHrgJual.val(hrgjual);
			});
			$("#btnUpdateBarang").click(function(e) {
				e.preventDefault();

				kode = elKode.val();
				nama = elNama.val();
				sat = elSat.val();
				hrgbeli = elHrgBeli.val();
				hrgjual = elHrgJual.val();
				console.log(kode, nama, sat, hrgbeli, hrgjual);
				$.post("./updateBarang.php", {
					kode: kode,
					nama: nama,
					satuan: sat,
					hargabeli: hrgbeli,
					hargajual: hrgjual
				}, function(data, status) {
					// alert(data + ": " + status);
					alert("Data barang berhasil diubah");
					$("#isi").load('./barang.php');
				});

				$.fn.clearform();
			});
			$('#btnDeleteBarang').click(function(e) {
				e.preventDefault();

				kode = elKode.val();

				$.post("./deleteBarang.php", {
					kode: kode
				}, function(data, status) {
					// alert(data + " : " + status);
					alert("Data barang berhasil dihapus");
					$("#isi").load('./barang.php');
				})
			});
		};

		$.fn.updateBarang();

		$.fn.clearform = function() {
			$(`#kode`).val("");
			$(`#nama`).val("");
			$(`#satuan`).val("");
			$(`#hargabeli`).val("");
			$(`#hargajual`).val("");
		};

		$.fn.removeFunc = function() {
			$.post("./deleteBarang.php", {
				kode_barang: kode
			}, function(data, status) {
				alert(data + " : " + status);
				$("#isi").load('./barang.php');
			})
		};
	});
</script>