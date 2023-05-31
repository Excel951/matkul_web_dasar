<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Master</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Headings-->
                    
                    <!-- DataTales Example -->
                    <div class="shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row p-3 flex justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Permintaan</h6>
                                    <button class="btn btn-success" 
                                        id="btnTambahBarang" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#staticBackdrop"
                                        >Tambah</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
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
                                    <tbody id="tbody">
                                        <tr>
                                            <td>A01</td>
                                            <td>Ram1</td>
                                            <td>Pcs</td>
                                            <td>Ani</td>
                                            <td>1</td>
                                            <td>1000</td>
                                            <td align="left"><button class="btnViewPemmintaan btn btn-success" id="btnViewPemmintaan" data-bs-toggle="modal" data-bs-target="#ModalUpdateBarang">V</button></td>
                                        </tr>
                                        <tr>
                                            <td>A01</td>
                                            <td>Ram1</td>
                                            <td>Pcs</td>
                                            <td>Ani</td>
                                            <td>2</td>
                                            <td>1000</td>
                                            <td align="left"><button class="btnViewPemmintaan btn btn-success" id="btnViewPemmintaan" data-bs-toggle="modal" data-bs-target="#ModalUpdateBarang">V</button></td>
                                        </tr>
                                        <tr>
                                            <td>A01</td>
                                            <td>Ram1</td>
                                            <td>Pcs</td>
                                            <td>Ani</td>
                                            <td>3</td>
                                            <td>5000</td>
                                            <td align="left"><button class="btnViewPemmintaan btn btn-success" id="btnViewPemmintaan" data-bs-toggle="modal" data-bs-target="#ModalUpdateBarang">V</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Total</td>
                                            <td id="totalItem">0</td>
                                            <td id="totalPermintaan">0</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script>
        console.log("ini index");
            $(document).ready(function () {
        //MASTER
            // BARANG
              $('#btnTambahBarang').click(function () {
                $('#isi').load("tambahpermintaan.php");
              });
            // VIEW PERMINTAAN
            $('#btnViewPemmintaan').click(function () {
                $('#isi').load("detailpermintaan.html");
              });
        //--------------------------------------------------------------------------------------------------------------
            console.log("masuk di fungsi hitung total permintaan");
            var jumlah = 0;
            var total = 0;
            var jumlahBaris = $("#myTable tr").length;
            for (let i = 1; i < jumlahBaris; i++) {
                jumlah += Number($("#myTable tr:eq(" + i + ") td:eq(5)").text());
                total += Number($("#myTable tr:eq(" + i + ") td:eq(4)").text());
            }
            $("#totalPermintaan").text(jumlah);

            //total item
            $("#totalItem").text(total);
            });
    //-------------------------------------
    </script>

</body>

</html>