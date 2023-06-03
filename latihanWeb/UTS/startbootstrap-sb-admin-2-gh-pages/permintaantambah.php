<!-- Page Content -->
<div class="card shadow mb-4">
	<div class="card-body">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800" id="headingIndex">
				Tambah Permintaan
			</h1>
		</div>
		<form target="_blank" method="post" autocomplete="on">
			<div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label for="tanggal" class="form-label input-group">Tanggal:
						</label>
						<input type="date" name="tanggal" id="tanggal" class="form-control input-group" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-3">
						<label for="konsumen" class="form-label input-group">Konsumen:
						</label>
						<input type="text" name="konsumen" id="konsumen" class="form-control input-group" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label for="karyawan">Karyawan: </label>
						<select class="form-control" name="karyawan" id="karyawan">

						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-3">
						<label for="telpKonsumen" class="form-label input-group">Telepon:
						</label>
						<input type="text" name="telpKonsumen" id="telpKonsumen" class="form-control input-group" />
					</div>
				</div>
			</div>
			<div class="mb-3">
				<label for="alamatKaryawan" class="form-label input-group">Alamat:
				</label>
				<input type="text" name="alamatKaryawan" id="alamatKaryawan" class="form-control input-group" />
			</div>
			<div class="mb-3">
				<label for="ketPermintaan" class="form-label input-group">Keterangan:
				</label>
				<input type="textarea" name="ketPermintaan" id="ketPermintaan" class="form-control input-group" />
			</div>
			<div class="mb-3 col-md-6"></div>
		</form>
		<div class="mb-3 row" id="tableAddItem">
			<div class="col-md-2">
				<label for="kodebrg" class="form-label input-group">Kode Barang:
				</label>
				<input type="text" name="kodebrg" id="kodebrg">
				<a class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" id="btnAddBarang" data-bs-toggle="modal" data-bs-target="#modalBeliBarang"><i class="fa fa-plus" aria-hidden="true"></i>
					Tambah Barang</a>
			</div>
			<div class="col-md-2">
				<label for="nama" class="form-label input-group">Nama:</label>
				<input type="text" name="nama" id="nama" class="form-control input-group" readonly />
			</div>
			<div class="col-md-2">
				<label for="satuan" class="form-label input-group">Satuan:</label>
				<input type="text" name="satuan" id="satuan" class="form-control input-group" readonly />
			</div>
			<div class="col-md-2">
				<label for="harga" class="form-label input-group">Harga:</label>
				<input type="text" name="harga" id="harga" class="form-control input-group" readonly />
			</div>
			<div class="col-md-2">
				<label for="jumlah" class="form-label input-group">Jumlah:</label>
				<input type="text" name="jumlah" id="jumlah" class="form-control input-group" />
			</div>
			<div class="col-md-2">
				<label for="saveItemBuyed" class="form-label input-group text-white">.
				</label>
				<button class="mx-auto btn btn-primary text-center" id="saveItemBuyed">
					Save
				</button>
			</div>
		</div>
		<div class="">
			<table class="table table-hover" id="myTable" border="1">
				<thead style="background-color: #485fc7">
					<tr>
						<th>Kode</th>
						<th>Nama</th>
						<th>Satuan</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Total</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody></tbody>
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
						<th rowspan="1" colspan="1"></th>
					</tr>
				</tfoot>
			</table>
			<br />
			<button id="btnSavePermintaan" class="btn btn-primary">Simpan Permintaan</button>
			<button id="btnCancelPermintaan" class="btn btn-danger">Batalkan</button>
		</div>
	</div>
</div>

<!-- Modal View -->
<div class="modal fade" id="modalBeliBarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header" id="staticBackdropLabel">
				<h1>Pilih Barang</h1>
			</div>
			<div class="modal-body">
				<div>
					<table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%">
						<thead>
							<tr>
								<th>
									Kode
								</th>
								<th>
									Nama
								</th>
								<th>
									Satuan
								</th>
								<th>
									Harga
								</th>
								<th>
									Action
								</th>
							</tr>
						</thead>
						<tfoot></tfoot>
						<tbody>
							<tr>
								<td>A01</td>
								<td>RAM1</td>
								<td>pcs</td>
								<td>1000</td>
								<td>
									<button data-bs-dismiss="modal" class="btn btn-info check">
										Pilih
									</button>
								</td>
							</tr>
							<tr>
								<td>A02</td>
								<td>RAM2</td>
								<td>pcs</td>
								<td>1500</td>
								<td>
									<button data-bs-dismiss="modal" class="btn btn-info check">
										Pilih
									</button>
								</td>
							</tr>
							<tr>
								<td>B01</td>
								<td>CPU1</td>
								<td>pcs</td>
								<td>2000</td>
								<td>
									<button data-bs-dismiss="modal" class="btn btn-info check">
										Pilih
									</button>
								</td>
							</tr>
							<tr>
								<td>B02</td>
								<td>CPU2</td>
								<td>pcs</td>
								<td>3000</td>
								<td>
									<button data-bs-dismiss="modal" class="btn btn-info check">
										Pilih
									</button>
								</td>
							</tr>
						</tbody>
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

<script>
	$(document).ready(function() {
		$("#kodebrg").hide();

		// $('#btnAddBarang').on('click', function() {
		// })
		const datatablemyTable = $('#myTable').DataTable();

		// ==================================================
		// menghitung total dari total barang dan harga
		$.fn.hitungTotal = function(file, kolom) {
			let total1 = 0;
			let total2 = 0;
			let panjang = $("#myTable tbody tr").length;
			$("#myTable tbody tr").each(function() {
				let currentRow = $(this);
				let value1 = currentRow.find("td").eq(kolom).text();
				total1 = total1 + Number(value1);
				let value2 = currentRow
					.find("td")
					.eq(kolom + 1)
					.text();
				total2 = total2 + Number(value2);
			});
			if (file === "pembelian1") {
				if (kolom === 3) {
					$("#totalbrg").text(total);
				} else if (kolom === 4) {
					$("#totalhrg").text(total);
				}
			} else if (file === "pembelian2") {
				if (kolom === 1) {
					$("#totalbrg").text(total);
				} else if (kolom === 2) {
					$("#totalhrg").text(total);
				}
			} else if (file === "pembelian3") {
				$("#totalItem").text(total1);
				$("#totalHarga").text(total2);
			} else if (file === "pembelian4") {}
		};
		// ==================================================

		// ==================================================
		// fungsi pada halaman pembelian4 (detail)
		$.fn.getKaryawan = function() {
			let datas;

			$.ajax({
				url: './getKaryawan.php',
				dataType: 'json',
				type: "POST",
				data: {},
				success: function(data, response) {
					const selectEl = document.querySelector('#karyawan');
					while (selectEl.hasChildNodes()) {
						selectEl.removeChild(selectEl.firstChild);
					}

					let tag = document.createElement('option');
					tag.value = 'null';
					tag.innerHTML = 'Pilih Karyawan';
					selectEl.append(tag);

					data.forEach(x => {
						tag = document.createElement('option');
						tag.value = x.kode_karyawan;
						tag.innerHTML = x.nama;
						selectEl.append(tag);
					});
				},
				error: function(data, response) {

				}
			})
		};
		// ==================================================

		// ==================================================
		// fungsi pada halaman pembelian3 (form pembelian)
		// ambil waktu untuk kode pembelian dan tanggal
		$.fn.ambilWaktu = function() {
			let dates = new Date();
			let year = dates.getFullYear();
			let month = dates.getMonth() + 1;
			let date = dates.getDate();
			let hour = dates.getHours();
			let minute = dates.getMinutes();
			let seconds = dates.getSeconds();
			let miliseconds = dates.getMilliseconds();

			let kode = `${year}${month}${date}${hour}${minute}${seconds}${miliseconds}`;
			return kode;
			// $("#tanggal").val(dates.toLocaleDateString());
		};
		// ==================================================

		// ==================================================
		// fungsi membersihkan form
		$.fn.clearform = function() {
			$(`#kodebrg`).val("1");
			$(`#nama`).val("");
			$(`#satuan`).val("");
			$(`#harga`).val("");
			$(`#jumlah`).val("");
		};
		// ==================================================

		// ==================================================
		// fungsi untuk remove barang
		$.fn.removeBarang = function() {
			let total = 0;
			$("#myTable tbody").on("click", ".remove", function() {
				let index = $(this).closest("tr").index();
				datatablemyTable.row(index).remove().draw();
				$.fn.hitungTotal("pembelian3", 4);
			});
		};
		// ==================================================

		// ==================================================
		function updateTable() {
			// select target table
			let table = document.querySelector('#myTable tbody');

			// create an observer instance
			let observer = new MutationObserver(function(mutationsList) {
				for (let mutation of mutationsList) {
					// check if mutations is in table
					console.log('tes');
					console.log(mutation.type);
					if (mutation.type === "childList") {
						console.log('berhasil');
						// datatablemyTable.destroy();
						// datatablemyTable.DataTable();
						// datatablemyTable.rows().invalidate().draw(false);
						// check if rows was increased in table
						// let addedRows;
						// addedRows = Array.from(mutation.addedNodes).filter((node) => {
						// 	node.nodeName === 'tr'
						// })
						// console.log(addedRows);
						// console.log(addedRows.length);
						// if (addedRows.size > 0) {
						// 	console.log(`Tabel telah bertambah`);
						// }
					}
				}
			})

			// configuration of the observer
			let config = {
				subtree: true,
				childList: true,
			};

			// pass node to observer with the configuration
			observer.observe(table, config);
		}
		updateTable()
		// ==================================================

		// ==================================================
		// click untuk simpan barang
		$.fn.saveBarang = function() {
			if ($("#kodebrg").val() != 1) {
				// ambil panjang dari tabel
				let panjang = $("#myTable").length;

				// ambil value dari form barang
				let kode = $(`#kodebrg`).val();
				let nama = $(`#nama`).val();
				let harga = $(`#harga`).val();
				let satuan = $(`#satuan`).val();
				let jumlah = $(`#jumlah`).val();
				let totalhrg = harga * jumlah;

				datatablemyTable.row.add([kode, nama, satuan, harga, jumlah, totalhrg, `<button id="id${panjang}" class="remove btn btn-danger">X</button>`]).draw();

				// $(`#myTable tbody`).append(
				// 	`<tr><td>${kode}</td><td>${nama}</td><td>${satuan}</td><td>${harga}</td><td>${jumlah}</td><td>${totalhrg}</td><td><button id="id${panjang}" class="remove btn btn-danger">X</button></td></tr>`
				// );

				$.fn.hitungTotal("pembelian3", 4);
				$.fn.clearform();
			} else {
				alert("Barang masih kosong");
			}
		};
		// ==================================================

		// ==================================================
		renderSelectBarang();
		async function renderSelectBarang() {
			const datas = await getDataBarang();

			// ambil elemen dari table di modal view
			const table = document.querySelector('#dataTable tbody');
			// bersihkan child elemen yang sudah ada
			while (table.hasChildNodes()) {
				table.removeChild(table.firstChild);
			}

			for (let index = 0; index < datas.length; index++) {
				// ambil data
				let valkode = datas[index].kode_barang
				let valnama = datas[index].nama_barang
				let valsatuan = datas[index].satuan
				let valhrgjual = datas[index].harga_jual

				// add row
				let rows = table.insertRow(index);

				// add cells
				let cellkode = rows.insertCell(0);
				let cellnama = rows.insertCell(1);
				let cellsatuan = rows.insertCell(2);
				let cellharga = rows.insertCell(3);
				let cellact = rows.insertCell(4);

				// create button for cellact
				const btnAct = document.createElement('button');
				btnAct.innerHTML = 'Pilih';
				btnAct.setAttribute('data-bs-dismiss', 'modal');
				btnAct.setAttribute('class', 'btn btn-info check');

				// add value of the cell
				cellkode.innerHTML = valkode;
				cellnama.innerHTML = valnama;
				cellsatuan.innerHTML = valsatuan;
				cellharga.innerHTML = valhrgjual;
				cellact.appendChild(btnAct);
			}

		}
		// ==================================================

		// ==================================================
		function checkVisibilityModalBarang() {
			const targetModal = document.querySelector('#modalBeliBarang');

			const observer = new MutationObserver(function(mutationList) {
				for (let mutation of mutationList) {
					if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
						if (targetModal.classList.contains('show')) {
							console.log(`Modal muncul!`);
							pilihBarang();
						}
					}
				}
			})

			const observerConfig = {
				attributes: true,
				attributeFilter: ['class']
			}

			observer.observe(targetModal, observerConfig)
		}
		checkVisibilityModalBarang()
		// ==================================================

		// ==================================================
		async function getDataBarang() {
			const response = await axios.get('./getBarang.php');
			return response.data;
		}
		// ==================================================

		// ==================================================
		$.fn.removeBarang();
		// ==================================================

		// ==================================================
		function pilihBarang() {
			$(".check").click(function() {
				let closestTR = $(this).closest("tr").children(0);
				let kodebrg = closestTR.eq(0).text();
				let nama = closestTR.eq(1).text();
				let satuan = closestTR.eq(2).text();
				let harga = closestTR.eq(3).text();

				$("#kodebrg").val(kodebrg);
				console.log($("#kodebrg").val());

				// ambil value (id) dari select
				let currentSelect = $(this);
				let id = currentSelect.val();

				$("#nama").val(nama);
				$("#satuan").val(satuan);
				$("#harga").val(harga);
			});
		}
		// ==================================================

		// ==================================================
		tambahPermintaan();

		function tambahPermintaan() {
			$('#btnSavePermintaan').on('click', function() {
				let kode = $.fn.ambilWaktu();
				let tanggal = $('#tanggal').val();
				let konsumen = $('#konsumen').val();
				let karyawan = $('#karyawan').val();
				let telepon = $('#telpKonsumen').val();
				let alamat = $('#alamatKaryawan').val();
				let ket = $('#ketPermintaan').val();

				let data = {
					kode: kode,
					tanggal: tanggal,
					konsumen: konsumen,
					karyawan: karyawan,
					telepon: telepon,
					alamat: alamat,
					keterangan: ket
				};

				axios.post('./adddbpermintaan.php', JSON.stringify(data), {
					headers: {
						'Content-Type': 'application:json'
					}
				}).then((response) => {
					alert(response.data);
				}).catch((error) => {
					console.log(error);
				})


			})
		}
		// ==================================================

		// ==================================================
		$('#btnCancelPermintaan').on('click', function() {
			$('#isi').load('./permintaan.php');
		});

		$("#saveItemBuyed").click(function() {
			$.fn.saveBarang();
		});

		// ambil tanggal dari sistem
		$.fn.getDate = function() {};

		// panggil function pindah halaman
		$.fn.pindahHalaman();

		$.fn.getKaryawan();
	});
</script>