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
								<th>Jumlah Barang</th>
								<th>Jumlah Harga</th>
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
									<button class="btn btn-info update btnViewPermintaan" data-bs-toggle="modal" data-bs-target="#modalViewPermintaan">
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
									<button class="btn btn-info update btnViewPermintaan" data-bs-toggle="modal" data-bs-target="#modalViewPermintaan">
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
									<button class="btn btn-info update btnViewPermintaan" data-bs-toggle="modal" data-bs-target="#modalViewPermintaan">
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
			<!-- Start Judul Modal -->
			<div class="modal-header" id="staticBackdropLabel">
				<h1>Tambah Barang</h1>
			</div>
			<!-- End Judul Modal -->
			<div class="modal-body">
				<!-- Start Form Permintaan -->
				<form target="_blank" method="post" autocomplete="on">
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label for="viewKode">Kode : </label>
								<label id="viewKode"></label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="viewTanggal" class="form-label input-group">Tanggal : </label>
								<label id="viewTanggal"></label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label for="viewKaryawan" class="form-label input-group">Karyawan : </label>
								<label id="viewKaryawan"></label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="viewKonsumen" class="form-label input-group">Konsumen : </label>
								<label id="viewKonsumen"></label>
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="viewTelepon" class="form-label input-group">Telepon : </label>
						<label id="viewTelepon"></label>
					</div>
					<div class="mb-3">
						<label for="viewAlamat" class="form-label input-group">Alamat : </label>
						<label id="viewAlamat"></label>
					</div>
					<div class="mb-3">
						<label for="viewKeterangan" class="form-label input-group">Keterangan : </label>
						<label id="viewKeterangan"></label>
					</div>
					<div class="mb-3 col-md-6"></div>
				</form>
				<!-- End Form Permintaan -->
				<div>
					<!-- Start Tabel List Permintaan Barang -->
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
					<!-- End Table List Permintaan Barang -->
				</div>
			</div>
			<div class="modal-footer">
				<!-- Start Button Close Modal -->
				<button type="button" class="btn btn-secondary" id="dismissBtn" data-bs-dismiss="modal">
					Close
				</button>
				<!-- End Button Close Modal -->
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
		renderPermintaan();

		const datatablemain = $('#dataTable').DataTable({
			order: [
				[1, 'desc']
			]
		});
		const datatableview = $('#myTable').DataTable();

		// ===============================================================================
		$("#btnAddPermintaan").click(function() {
			$("#content #isi").load("./permintaantambah.php");
		});
		$("#dataTable").on('click', '.btnViewPermintaan', function() {
			const rowEl = $(this).closest('tr').find('td').eq(0);
			const currkode = rowEl.text();
			// console.log(currkode);
			getListPermintaanBarang(currkode);
			getDetailPermintaan(currkode);
		});
		// ===============================================================================

		// ===============================================================================
		async function getDetailPermintaan(kode) {
			$.ajax({
				url: './getviewpermintaan.php',
				dataType: 'json',
				type: 'POST',
				data: {
					kodeper: kode
				},
				success: function(data, response) {
					$('#viewKode').text(data[0].kodeper);
					$('#viewTanggal').text(data[0].tanggal);
					$('#viewKaryawan').text(data[0].nama);
					$('#viewKonsumen').text(data[0].konsumen);
					$('#viewTelepon').text(data[0].telepon);
					$('#viewAlamat').text(data[0].alamat);
					$('#viewKeterangan').text(data[0].keterangan);
				},
				error: function(data, response) {}
			})
		}
		// ===============================================================================

		// ===============================================================================
		async function getListPermintaanBarang(kode) {
			let datas, totalitem = 0,
				totalhrg = 0;

			$.ajax({
				url: './getviewdetailpermintaan.php',
				dataType: 'json',
				type: "POST",
				data: {
					kodeper: kode
				},
				success: function(data, response) {
					datatableview.clear();
					for (const iterator of data) {
						let subtotal = parseInt(iterator.jumlah) * parseInt(iterator.harga_jual);
						totalitem += parseInt(iterator.jumlah);
						totalhrg += subtotal;
						datatableview.row.add([iterator.kode_barang, iterator.nama_barang, iterator.satuan, iterator.harga_jual, iterator.jumlah, subtotal]).draw();
					}
					document.querySelector(`#myTable #totalItem`).innerHTML = totalitem;
					document.querySelector(`#myTable #totalHarga`).innerHTML = totalhrg;
				},
				error: function(data, response) {

				}
			})
		}
		// ===============================================================================

		// ===============================================================================
		function hitungtotalmodal() {
			// let table = document.querySelector(`#myTable tbody`);
			// let panjang = table.rows.length;
			// let total = 0;
			// for (let i = 0; i < panjang; i++) {
			// 	let data = table.rows[i].cells[4];
			// 	data = parseInt(data.innerHTML);
			// 	total = total + data;
			// }
			// console.log(total + "testt11");

			// total = 0;

			// for (let i = 0; i < panjang; i++) {
			// 	let data = table.rows[i].cells[5];
			// 	data = parseInt(data.innerHTML);
			// 	total = total + data;
			// }
			// console.log(total + "testt11");
		}
		// ===============================================================================

		// ===============================================================================

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
				// console.log(i, total);
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

		async function renderPermintaan() {
			const datas = await getDataPermintaan();

			datatablemain.clear();
			// datatablemain.rows.add(datas);
			// datatablemain.draw();
			datas.forEach(element => {
				// console.log(element);
				datatablemain.row.add([element.kodeper, element.tanggal, element.konsumen, element.nama, element.totalitem, element.totalhrg, `<button class="btn btn-info update btnViewPermintaan" data-bs-toggle="modal" data-bs-target="#modalViewPermintaan">V</button>`]).draw();
			});
			hitungtotalMain();
		}
		// ===============================================================================

	});
</script>