<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800" id="headingIndex">
		Permintaan
	</h1>
	<a class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm" id="btnAddPermintaan"><i class="fa fa-plus" aria-hidden="true"></i>
		Tambah Permintaan</a>
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
								<th>Kode</th>
								<th>Tanggal</th>
								<th>Konsumen</th>
								<th>Karyawan</th>
								<th>Item</th>
								<th>Total</th>
								<th>Action</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th colspan="4">Total</th>
								<th id="totalItem">Item</th>
								<th id="totalHarga" colspan="2">
									Total
								</th>
							</tr>
						</tfoot>
						<tbody>
							<tr>
								<td>P005</td>
								<td>1-1-2023</td>
								<td>Ali</td>
								<td>Ani</td>
								<td>3</td>
								<td>200000</td>
								<td>
									<button type="submit" class="btn btn-info update btnViewPermintaan" data-bs-toggle="modal" data-bs-target="#modalViewPermintaan">
										V
									</button>
								</td>
							</tr>
							<tr>
								<td>P007</td>
								<td>2-1-2023</td>
								<td>Budi</td>
								<td>Ani</td>
								<td>4</td>
								<td>300000</td>
								<td>
									<button type="submit" class="btn btn-info update btnViewPermintaan" data-bs-toggle="modal" data-bs-target="#modalViewPermintaan">
										V
									</button>
								</td>
							</tr>
							<tr>
								<td>P009</td>
								<td>3-1-2023</td>
								<td>Cindi</td>
								<td>Ani</td>
								<td>5</td>
								<td>500000</td>
								<td>
									<button type="submit" class="btn btn-info update btnViewPermintaan" data-bs-toggle="modal" data-bs-target="#modalViewPermintaan">
										V
									</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal View -->
<div class="modal fade" id="modalViewPermintaan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
		<div class="modal-content">
			<div class="modal-header" id="staticBackdropLabel">
				<h1>Tambah Barang</h1>
			</div>
			<div class="modal-body">
				<form target="_blank" method="post" autocomplete="on">
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label for="">Kode : P005</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="tanggal" class="form-label input-group">Tanggal : 1-1-2023
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label for="supplier" class="form-label input-group">Karyawan : Ani
								</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="kode" class="form-label input-group">Konsumen : Ali
								</label>
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="telpSupplier" class="form-label input-group">Telepon : 0812318236
						</label>
					</div>
					<div class="mb-3">
						<label for="alamatSupplier" class="form-label input-group">Alamat : Jl. Dinamika 98 Sby
						</label>
					</div>
					<div class="mb-3">
						<label for="telpSupplier" class="form-label input-group">Keterangan : Kirim dengan Gojek
						</label>
					</div>
					<div class="mb-3 col-md-6"></div>
				</form>
				<div>
					<table class="table table-hover" id="myTable" border="1">
						<thead class="bg-gradient-success">
							<tr>
								<th class="text-gray-900">Kode</th>
								<th class="text-gray-900">Nama</th>
								<th class="text-gray-900">Satuan</th>
								<th class="text-gray-900">Harga</th>
								<th class="text-gray-900">Jumlah</th>
								<th class="text-gray-900">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>A01</td>
								<td>RAM1</td>
								<td>pcs</td>
								<td>1000</td>
								<td>100</td>
								<td>100000</td>
							</tr>
							<tr>
								<td>B01</td>
								<td>CPU1</td>
								<td>pcs</td>
								<td>2000</td>
								<td>50</td>
								<td>100000</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th rowspan="1" colspan="4">
									Total
								</th>
								<th id="totalItem" rowspan="1" colspan="1">
									Item
								</th>
								<th id="totalHarga" rowspan="1" colspan="1">
									Total
								</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" id="dismissBtn" data-bs-dismiss="modal">
					Close
				</button>
			</div>
		</div>
	</div>
</div>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<!-- <script src="js/demo/datatables-demo.js"></script> -->

<script>
	$(document).ready(function() {
		const datatablemain = $('#dataTable').DataTable();

		// ===============================================================================
		$("#btnAddPermintaan").click(function() {
			$("#content #isi").load("./permintaantambah.php");
		});
		$(".btnViewPermintaan").click(function() {
			hitungtotalmodal();
			const datatableview = $('#myTable').DataTable();
		});
		// ===============================================================================

		// ===============================================================================
		function hitungtotalmodal() {
			let table = document.querySelector(`#myTable tbody`);
			let panjang = table.rows.length;
			let total = 0;
			for (let i = 0; i < panjang; i++) {
				let data = table.rows[i].cells[4];
				data = parseInt(data.innerHTML);
				total = total + data;
			}
			// console.log(total + "testt11");
			document.querySelector(`#myTable #totalItem`).innerHTML = total;

			total = 0;

			for (let i = 0; i < panjang; i++) {
				let data = table.rows[i].cells[5];
				data = parseInt(data.innerHTML);
				total = total + data;
			}
			// console.log(total + "testt11");
			document.querySelector(`#myTable #totalHarga`).innerHTML = total;
		}
		// ===============================================================================

		// ===============================================================================
		hitungtotalMain();

		function hitungtotalMain() {
			let table = document.querySelector(`#dataTable tbody`);
			let panjang = table.rows.length;
			let total = 0;
			for (let i = 0; i < panjang; i++) {
				let data = table.rows[i].cells[4];
				data = parseInt(data.innerHTML);
				total = total + data;
			}
			// console.log(total + "testt11");
			document.querySelector(`#totalItem`).innerHTML = total;
			total = 0;
			for (let i = 0; i < panjang; i++) {
				let data = table.rows[i].cells[5];
				data = parseInt(data.innerHTML);
				total = total + data;
			}
			// console.log(total + "testt11");
			document.querySelector(`#totalHarga`).innerHTML = total;
		}
		// ===============================================================================

		// ===============================================================================
		async function getDataPermintaan() {
			const response = await axios.get('./getpermintaan.php');
			return response.data;
		}

		renderPermintaan()
		async function renderPermintaan() {
			const datas = await getDataPermintaan();

			console.log(datas);
			// datatablemain.clear();
			// datatablemain.rows.add(datas);
			// datatablemain.draw();
		}
		// ===============================================================================

	});
</script>