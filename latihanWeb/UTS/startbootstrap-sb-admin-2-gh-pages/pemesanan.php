<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800" id="headingIndex">
        Pemesanan
    </h1>
    <a class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm" id="btnAddPemesanan"><i class="fa fa-plus" aria-hidden="true"></i>
        Tambah Pemesanan</a>
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
                                <th>Karyawan</th>
                                <th>Supplier</th>
                                <th>Telepon</th>
                                <th>Jumlah Barang</th>
                                <th>Jumlah Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th colspan="5">Total</th>
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
                                <td>3</td>
                                <td>200000</td>
                                <td>
                                    <button class="btn btn-info update btnViewPemesanan" data-bs-toggle="modal" data-bs-target="#modalViewPemesanan">
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
                                <td>4</td>
                                <td>300000</td>
                                <td>
                                    <button class="btn btn-info update btnViewPemesanan" data-bs-toggle="modal" data-bs-target="#modalViewPemesanan">
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
                                <td>5</td>
                                <td>500000</td>
                                <td>
                                    <button class="btn btn-info update btnViewPemesanan" data-bs-toggle="modal" data-bs-target="#modalViewPemesanan">
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

<!-- Start Modal View -->
<div class="modal fade" id="modalViewPemesanan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <!-- Start Judul Modal -->
            <div class="modal-header" id="staticBackdropLabel">
                <h1>Tambah Barang</h1>
            </div>
            <!-- End Judul Modal -->
            <div class="modal-body">
                <!-- Start Form Modal -->
                <form target="_blank" method="post" autocomplete="on">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="viewKode">Kode : </label><br>
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
                                <label for="viewSupplier" class="form-label input-group">Supplier : </label>
                                <label id="viewSupplier"></label>
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
                <!-- End Form Modal -->
                <div>
                    <!-- Start Table myTable -->
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
                    <!-- End Table myTable -->
                </div>
            </div>
            <div class="modal-footer">
                <!-- Start Button CLose -->
                <button type="button" class="btn btn-secondary" id="dismissBtn" data-bs-dismiss="modal">
                    Close
                </button>
                <!-- End Button Close -->
            </div>
        </div>
    </div>
</div>
<!-- End Modal View -->

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<!-- <script src="js/demo/datatables-demo.js"></script> -->

<script>
    $(document).ready(function() {
        // ===============================================================================
        // DEKLARASI DATATABLE UNTUK HALAMAN UTAMA
        const datatablemain = $('#dataTable').DataTable({
            order: [
                [0, 'desc']
            ]
        });

        // DEKLARASI DATATABLE UNTUK HALAMAN DETAIL
        const datatableview = $('#myTable').DataTable();
        // ===============================================================================

        renderPemesanan();

        // ===============================================================================
        // KETIKA KLIK TAMBAH PEMESANAN
        $("#btnAddPemesanan").click(function() {
            $("#content #isi").load("./pemesanantambah.php");
        });
        // ===============================================================================

        // ===============================================================================
        // KETIKA KLIK DETAIL PESANAN DI TABEL PEMESANAN
        $("#dataTable").on('click', '.btnViewPemesanan', function() {
            const rowEl = $(this).closest('tr').find('td').eq(0);
            const currkode = rowEl.text();
            // SIAPKAN DATA DI TABEL LIST BARANG PEMESANAN
            getListPemesananBarang(currkode);

            // SIAPKAN DATA DI DETAIL PEMESANAN
            getDetailPemesanan(currkode);
        });
        // ===============================================================================

        // ===============================================================================
        async function getDetailPemesanan(kode) {
            $.ajax({
                url: './getviewpemesanan.php',
                dataType: 'json',
                type: 'POST',
                data: {
                    kodepesan: kode
                },
                success: function(data, response) {
                    $('#viewKode').text(data[0].kodepem);
                    $('#viewTanggal').text(data[0].tanggal);
                    $('#viewKaryawan').text(data[0].nama);
                    $('#viewSupplier').text(data[0].perusahaan);
                    $('#viewTelepon').text(data[0].telepon_kantor);
                    $('#viewAlamat').text(data[0].alamat);
                    $('#viewKeterangan').text(data[0].keterangan);
                },
                error: function(data, response) {}
            })
        }
        // ===============================================================================

        // ===============================================================================
        async function getListPemesananBarang(kode) {
            let datas, totalitem = 0,
                totalhrg = 0;

            $.ajax({
                url: './getviewdetailpemesanan.php',
                dataType: 'json',
                type: "POST",
                data: {
                    kodepesan: kode
                },
                success: function(data, response) {
                    datatableview.clear();
                    for (const iterator of data) {
                        let subtotal = parseInt(iterator.jumlah) * parseInt(iterator.harga_beli);
                        totalitem += parseInt(iterator.jumlah);
                        totalhrg += subtotal;
                        datatableview.row.add([iterator.kode_barang, iterator.nama_barang, iterator.satuan, iterator.harga_beli, iterator.jumlah, subtotal]).draw();
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
                let data = table.rows[i].cells[5];
                data = parseInt(data.innerHTML);
                total = total + data;
            }
            // console.log(total + "testt11");
            document.querySelector(`#totalItem`).innerHTML = total;
            total = 0;
            for (let i = 0; i < panjang; i++) {
                let data = table.rows[i].cells[6];
                data = parseInt(data.innerHTML);
                total = total + data;
                // console.log(i, total);
            }
            // console.log(total + "testt11");
            document.querySelector(`#totalHarga`).innerHTML = total;
        }
        // ===============================================================================

        // ===============================================================================
        async function getDataPemesanan() {
            const response = await axios.get('./getpemesanan.php');
            return response.data;
        }

        async function renderPemesanan() {
            const datas = await getDataPemesanan();

            datatablemain.clear();
            // datatablemain.rows.add(datas);
            // datatablemain.draw();
            datas.forEach(element => {
                // console.log(element);
                datatablemain.row.add([element.kodepem, element.tanggal, element.nama, element.perusahaan, element.telepon_kantor, element.totalitem, element.totalhrg, `<button class="btn btn-info update btnViewPemesanan" data-bs-toggle="modal" data-bs-target="#modalViewPemesanan">V</button>`]).draw();
            });
            hitungtotalMain();
        }
        // ===============================================================================

    });
</script>